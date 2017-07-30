<?php

namespace AJT\ReviewBundle\Services;

use Google\Spreadsheet\DefaultServiceRequest;
use Google\Spreadsheet\ServiceRequestFactory;
use Google\Spreadsheet\SpreadsheetService;
use AJT\ReviewBundle\Entity\Review;

class Utils
{
	public function __construct($em) {
		$this->manager = $em;
	}

	public function checkUniqueConstraint($object, $entityName, $field)
    {
    	$id = null;
        
        //DQL
        $query = $this->manager->createQuery(
            "SELECT o
            FROM AJT\ReviewBundle\Entity\\".$entityName." o
            WHERE o.".$field." = :obj"
        )->setParameter('obj', strtolower($object));

        $result = $query->setMaxResults(1)->getOneOrNullResult();

        if ($result !== null){
            $id = $result->getId();
        }

        return $id;
    }

    public function applyFiltersToReview ($review){
        $review = strtolower($review);
        $review = str_replace(",", ".", $review);

        $keep = "0-9a-z\.\-";
        $regex = sprintf('/[^%s]/', $keep);
        $review = preg_replace($regex, " ", $review);

        $review = $this->multiexplode(array(".", ",", "but", "and", "&", "-", "as well"),$review);

        foreach ($review as $key => $sentence) {
            $review[$key] = " ".$sentence." ";
        }

        return $review;

    }

    public function multiexplode ($delimiters,$string) {

        $ready = str_replace($delimiters, $delimiters[0], $string);
        $launch = explode($delimiters[0], $ready);
        return  $launch;

    }

    public function getTopicArray(){

        $repository = $this->manager->getRepository('AJTReviewBundle:Topic')->findAll();
        $topicArray = Array();
        $i = 0;

        foreach ($repository as $key => $value) {
            $topic = $value->getTopic();
            $alternativeNames = explode(",", $value->getAlternativeName());
            $topicArray[$topic] = $alternativeNames; 
        }

        return $topicArray;
    }

    public function getPositiveArray(){

        $repository = $this->manager->getRepository('AJTReviewBundle:Positive')->findAll();
        $positiveArray = Array();
        $i = 0;

        foreach ($repository as $key => $value) {
            $positiveArray[$i] = $value->getPositive();
            $i++;
        }
        
        return $positiveArray;
    }

    public function getNegativeArray(){

        $repository = $this->manager->getRepository('AJTReviewBundle:Negative')->findAll();
        $negativeArray = Array();
        $i = 0;

        foreach ($repository as $key => $value) {
            $negativeArray[$i] = $value->getNegative();
            $i++;
        }

        return $negativeArray;
    }

    public function cleanBlankSpaces($alternativeName){

        $names = explode(",", $alternativeName);
        foreach ($names as $key => $name) {
            $names[$key] = trim($name);
        }
        $alternativeName = implode(",", $names);

        return $alternativeName;
    }

    public function import(){

        $serviceRequest = new DefaultServiceRequest("");
        ServiceRequestFactory::setInstance($serviceRequest);

        $spreadsheetService = new SpreadsheetService();
        $worksheetFeed = $spreadsheetService->getPublicSpreadsheet("1GCOhIkzm13Kln6uyUhK7ShMoPn_qUCYLxCKDIogPQt0");

        $worksheet = $worksheetFeed->getByTitle('reviewsToImport');
        $listFeed = $worksheet->getListFeed();



        $batchSize = 20;
        $i = 0;


        foreach ($listFeed->getEntries() as $listEntry) {
            $i++;
            $values = $listEntry->getValues();

            $rev = new Review();
            $rev->setReview($values["review"]);
            $this->manager->persist($rev);
            if (($i % $batchSize) === 0) {
                $this->manager->flush();
                $this->manager->clear();
            }
            
        }

        $this->manager->flush();
        $this->manager->clear();

    }

    public function runAnalysis($id){
        $positiveArray = $this->getPositiveArray();
        $negativeArray = $this->getNegativeArray();       
        $topicArray = $this->getTopicArray();

        $repository = $this->manager->getRepository('AJTReviewBundle:Review');
        $rev = $repository->find($id);

        $reviewSentences = $this->applyFiltersToReview($rev->getReview());

        $totalScore = array();
        $totalScore["analysis"] = "";
        $totalScore["score"] = 0;

        foreach ($reviewSentences as $i => $sentence) {
            $score = $this->sentenceAnalysis($sentence, $topicArray, $positiveArray, $negativeArray);
            $totalScore["analysis"] = $totalScore["analysis"] . $score["analysis"];
            $totalScore["score"] = $totalScore["score"] + $score["score"];
        }

        return $totalScore;
    }

    public function sentenceAnalysis($sentence, $topics, $positives, $negatives){

        $positiveScore = $this->analysis($sentence, $topics, $positives);
        $negativeScore = $this->analysis($sentence, $topics, $negatives);

        $score["analysis"] = $positiveScore["analysis"] . $negativeScore["analysis"];
        $score["score"] = $positiveScore["score"] - $negativeScore["score"];

        return $score;

    }

    public function analysis($sentence, $topics, $adjectives){

        $score["analysis"] = "";
        $score["score"] = 0;

        $topic = $this->lookForTopic($sentence, $topics);
        $adjective = $this->lookForAdjective($sentence, $adjectives);


        if (($topic != null) && ($adjective != null)){

            $score["analysis"] = $this->scoreAnalysis($sentence, $topic, $adjective);
            $score["score"] = 1;

        } elseif (($topic == null) && ($adjective != null)){
            $score["analysis"] = $this->scoreAnalysisWithoutTopic($sentence, $adjective);
            $score["score"] = 1;
        }

        return $score;

    }

    public function lookForTopic($sentence, $topics){
        foreach ($topics as $topic => $alternativeTopics) {
            if (strpos($sentence, " ".$topic." ")){
                return $topic;
            }else{
                foreach ($alternativeTopics as $id => $alternativeTopic) {
                    if ($alternativeTopic != null){
                        if (strpos($sentence, " ".$alternativeTopic." " ) !== false){
                            return $alternativeTopic;
                        }
                    }
                }
            }
        }
    }

    public function lookForAdjective($sentence, $adjectives){
        foreach ($adjectives as $id => $adjective) {
            if (strpos($sentence, " ".$adjective." ") !== false){
                return $adjective;
            }
        }
    }

    public function scoreAnalysis($sentence, $topic, $adjective){
        $topicPos = strpos($sentence, $topic);
        $adjectivePos = strpos($sentence, $adjective);

        if ($topicPos < $adjectivePos){
            return substr($sentence, $topicPos, $adjectivePos + (strlen($adjective)) - $topicPos).";";
        }else{
            return substr($sentence, $adjectivePos, $topicPos + (strlen($topic)) - $adjectivePos).";";
        }

    }

    public function scoreAnalysisWithoutTopic($sentence, $adjective){

        $adjectivePos = strpos($sentence, $adjective);
        
        return substr($sentence, $adjectivePos, $adjectivePos + (strlen($adjective))).";";

    }


}


?>