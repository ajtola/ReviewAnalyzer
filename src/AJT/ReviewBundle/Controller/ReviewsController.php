<?php

namespace AJT\ReviewBundle\Controller;

use Google\Spreadsheet\DefaultServiceRequest;
use Google\Spreadsheet\ServiceRequestFactory;
use Google\Spreadsheet\SpreadsheetService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AJT\ReviewBundle\Entity\Review;
use AJT\ReviewBundle\Entity\Topic;
use AJT\ReviewBundle\Entity\Positive;
use AJT\ReviewBundle\Entity\Negative;
use AJT\ReviewBundle\Form\ReviewType;
use AJT\ReviewBundle\Form\TopicType;
use AJT\ReviewBundle\Form\PositiveType;
use AJT\ReviewBundle\Form\NegativeType;

class ReviewsController extends Controller
{
    public function indexAction($page)
    {
        $em = $this->get('doctrine.orm.entity_manager');


        $revs = $em->getRepository('AJTReviewBundle:Review');

        //pagination
        $pageSize = 5;
        $paginator=$revs->getPaginateReview($pageSize,$page);
        $totalItems = count($paginator);
        $pagesCount = ceil($totalItems / $pageSize);

        return $this->render('AJTReviewBundle:Reviews:index.html.twig', array(
            "revs"     => $paginator,
            "totalItems" => $totalItems,
            "pagesCount" => $pagesCount,
            "page" => $page
        ));

    }

    public function addReviewAction(){

        $rev = new Review();
        $form = $this->createCreateReviewForm($rev);
        return $this->render('AJTReviewBundle:Reviews:review.html.twig', array('form' => $form->createView()));
    }

    public function deleteReviewAction($page, $id){

        $em = $this->get('doctrine.orm.entity_manager');

        $reviewRepository = $em->getRepository('AJTReviewBundle:Review');
        $review = $reviewRepository->find($id);

        if (!$id) {
            throw $this->createNotFoundException(
                'No review found for id '.$id
            );
        }   

        $em->remove($review);
        $em->flush();

        //return $this->redirectToRoute('ajt_review_index');
        $pageSize = 5;
        $paginator=$reviewRepository->getPaginateReview($pageSize,$page);
        $totalItems = count($paginator);
        $pagesCount = ceil($totalItems / $pageSize);

        return $this->render('AJTReviewBundle:Reviews:index.html.twig', array(
            "revs"     => $paginator,
            "totalItems" => $totalItems,
            "pagesCount" => $pagesCount,
            "page" => $page
        ));

    }

    public function addTopicAction($page){

        $topic = new Topic();
        $formTopic = $this->createCreateTopicForm($topic);

        //Pagination
        $em = $this->get('doctrine.orm.entity_manager');

        $top = $em->getRepository('AJTReviewBundle:Topic');

        $pageSize = 5;
        $paginator=$top->getPaginateTopic($pageSize,$page);
        $totalItems = count($paginator);
        $pagesCount = ceil($totalItems / $pageSize);

        return $this->render('AJTReviewBundle:Reviews:topic.html.twig', array(
            'formTopic' => $formTopic->createView(),
            "top"     => $paginator,
            "totalItems" => $totalItems,
            "pagesCount" => $pagesCount,
            "page" => $page
        ));
    }

    public function deleteTopicAction($page, $id){

        $em = $this->get('doctrine.orm.entity_manager');

        $topicRepository = $em->getRepository('AJTReviewBundle:Topic');
        $topic = $topicRepository->find($id);

        if (!$id) {
            throw $this->createNotFoundException(
                'No topic found for id '.$id
            );
        }   

        $em->remove($topic);
        $em->flush();
        //return $this->redirectToRoute('ajt_review_positive_p');

        $topic = new Topic();
        $formTopic = $this->createCreateTopicForm($topic);

        $pageSize = 5;
        $paginator=$topicRepository->getPaginateTopic($pageSize,$page);
        $totalItems = count($paginator);
        $pagesCount = ceil($totalItems / $pageSize);

        return $this->render('AJTReviewBundle:Reviews:topic.html.twig', array(
            'formTopic' => $formTopic->createView(),
            "top"     => $paginator,
            "totalItems" => $totalItems,
            "pagesCount" => $pagesCount,
            "page" => $page
        ));

    }

    public function addPositiveAction($page){

        //Pagination
        $em = $this->get('doctrine.orm.entity_manager');

        $pos = $em->getRepository('AJTReviewBundle:Positive');

        $positive = new Positive();
        $formPositive = $this->createCreatePositiveForm($positive);

        $pageSize = 5;
        $paginator=$pos->getPaginatePositive($pageSize,$page);
        $totalItems = count($paginator);
        $pagesCount = ceil($totalItems / $pageSize);

        return $this->render('AJTReviewBundle:Reviews:positive.html.twig', array(
            'formPositive' => $formPositive->createView(),
            "pos"     => $paginator,
            "totalItems" => $totalItems,
            "pagesCount" => $pagesCount,
            "page" => $page
        ));
    }

    public function deletePositiveAction($page, $id){

        $em = $this->get('doctrine.orm.entity_manager');

        $posRepository = $em->getRepository('AJTReviewBundle:Positive');
        $positive = $posRepository->find($id);

        if (!$id) {
            throw $this->createNotFoundException(
                'No positive found for id '.$id
            );
        }   

        $em->remove($positive);
        $em->flush();

        $positive = new Positive();
        $formPositive = $this->createCreatePositiveForm($positive);

        $pageSize = 5;
        $paginator=$posRepository->getPaginatePositive($pageSize,$page);
        $totalItems = count($paginator);
        $pagesCount = ceil($totalItems / $pageSize);

        return $this->render('AJTReviewBundle:Reviews:positive.html.twig', array(
            'formPositive' => $formPositive->createView(),
            "pos"     => $paginator,
            "totalItems" => $totalItems,
            "pagesCount" => $pagesCount,
            "page" => $page
        ));

    }

    public function addNegativeAction($page){

        $negative = new Negative();
        $formNegative = $this->createCreateNegativeForm($negative);

        //Pagination
        $em = $this->get('doctrine.orm.entity_manager');


        $neg = $em->getRepository('AJTReviewBundle:Negative');

        $pageSize = 5;
        $paginator=$neg->getPaginateNegative($pageSize,$page);
        $totalItems = count($paginator);
        $pagesCount = ceil($totalItems / $pageSize);

        return $this->render('AJTReviewBundle:Reviews:negative.html.twig', array(
            'formNegative' => $formNegative->createView(),
            "neg"     => $paginator,
            "totalItems" => $totalItems,
            "pagesCount" => $pagesCount,
            "page" => $page
        ));
    }

    public function deleteNegativeAction($page, $id){

        $em = $this->get('doctrine.orm.entity_manager');

        $negRepository = $em->getRepository('AJTReviewBundle:Negative');
        $negative = $negRepository->find($id);

        if (!$id) {
            throw $this->createNotFoundException(
                'No negative found for id '.$id
            );
        }   

        $em->remove($negative);
        $em->flush();

        $negative = new Negative();
        $formNegative = $this->createCreateNegativeForm($negative);

        $pageSize = 5;
        $paginator=$negRepository->getPaginateNegative($pageSize,$page);
        $totalItems = count($paginator);
        $pagesCount = ceil($totalItems / $pageSize);

        return $this->render('AJTReviewBundle:Reviews:negative.html.twig', array(
            'formNegative' => $formNegative->createView(),
            "neg"     => $paginator,
            "totalItems" => $totalItems,
            "pagesCount" => $pagesCount,
            "page" => $page
        ));

    }

    private function createCreateReviewForm(Review $entity){

        $form = $this->createForm(ReviewType::class, $entity, array(
            'action'=>$this->generateUrl('ajt_review_createReview'),
            'method'=>'POST'
        ));

        return $form;
    }

    private function createCreateTopicForm(Topic $entity){

        $form = $this->createForm(TopicType::class, $entity, array(
            'action'=>$this->generateUrl('ajt_review_createTopic'),
            'method'=>'POST'
        ));

        return $form;
    }

    private function createCreatePositiveForm(Positive $entity){

        $form = $this->createForm(PositiveType::class, $entity, array(
            'action'=>$this->generateUrl('ajt_review_createPositive'),
            'method'=>'POST'
        ));

        return $form;
    }

    private function createCreateNegativeForm(Negative $entity){

        $form = $this->createForm(NegativeType::class, $entity, array(
            'action'=>$this->generateUrl('ajt_review_createNegative'),
            'method'=>'POST'
        ));

        return $form;
    }

    public function createReviewAction(Request $request){

        $rev = new Review();
        $form = $this->createCreateReviewForm($rev);
        $form->handleRequest($request);

        if ($form->isValid()){
            $em = $this->get('doctrine.orm.entity_manager');
    
            $em->persist($rev);
            $em->flush();

            return $this->redirectToRoute('ajt_review_index');
        }

        return $this->render('AJTReviewBundle:Reviews:review.html.twig', array('form' => $form->createView()));
    }

    public function createTopicAction(Request $request){

        $topic = new Topic();
        $formTopic = $this->createCreateTopicForm($topic);
        $formTopic->handleRequest($request);

        if ($formTopic->isValid()){

            $data = $formTopic->getData();
            $utils = $this->get('utils');
            $idIfExists = $utils->checkUniqueConstraint($data->getTopic(), "Topic", "topic");

            $em = $this->get('doctrine.orm.entity_manager');

            $utils = $this->get('utils');
    

            if ($idIfExists === null){

                $t = new Topic();
                $t->setTopic($data->getTopic());
                
                $altNamesWithoutSpaces = $utils->cleanBlankSpaces($data->getAlternativeName());

                $t->setAlternativeName($altNamesWithoutSpaces);
          
                $em = $this->get('doctrine.orm.entity_manager');
                $em->persist($t);
                $em->flush();    

            }else{
                
                $repository = $this->getDoctrine()->getRepository('AJTReviewBundle:Topic');
                $ExistingTopic = $repository->find($idIfExists);

                $newAlternativeNames = $this->setNewAlternativeNames($ExistingTopic->getAlternativeName(), $data->getAlternativeName());

                $ExistingTopic->setAlternativeName($utils->cleanBlankSpaces(implode(",", array_filter($newAlternativeNames))));

                $em->persist($ExistingTopic);
                $em->flush();
                
            }

            return $this->redirectToRoute('ajt_review_topic');
        }
    }

    public function setNewAlternativeNames($existingAlternativeNames, $newAlternativeNames){

        $existingAlternativeNames = explode(",", $existingAlternativeNames);
        $newAlternativeNames = explode(",", $newAlternativeNames);

        if ((count($existingAlternativeNames) !== 0)){
            foreach ($newAlternativeNames as $key => $an) {
                if (!in_array($an, $existingAlternativeNames)){
                    array_push($existingAlternativeNames, $an);
                }
            }
        }else{
            $existingAlternativeNames = $newAlternativeNames;
        }

        return$existingAlternativeNames;

    }

    public function createPositiveAction(Request $request){

        $positive = new Positive();
        $formPositive = $this->createCreatePositiveForm($positive);
        $formPositive->handleRequest($request);

        if ($formPositive->isValid()){

            $em = $this->get('doctrine.orm.entity_manager');
    

            $data = $formPositive->getData();
            $utils = $this->get('utils');
            $idIfExists = $utils->checkUniqueConstraint($data->getPositive(), "Positive", "positive");

            if ($idIfExists === null){
                $em->persist($positive);
                $em->flush();                
            }


            return $this->redirectToRoute('ajt_review_positive');
        }
    }

    public function createNegativeAction(Request $request){

        $negative = new Negative();
        $formNegative = $this->createCreateNegativeForm($negative);
        $formNegative->handleRequest($request);

        if ($formNegative->isValid()){

            $em = $this->get('doctrine.orm.entity_manager');

            $data = $formNegative->getData();
            $utils = $this->get('utils');
            $idIfExists = $utils->checkUniqueConstraint($data->getNegative(), "Negative", "negative");

            if ($idIfExists === null){
                $em->persist($negative);
                $em->flush();                
            }

            return $this->redirectToRoute('ajt_review_negative');
        }
    }

    public function runAction($page, $id){

        $utils = $this->get('utils');

        $this->run($id);

        $em = $this->get('doctrine.orm.entity_manager');
        $reviewRepository = $em->getRepository('AJTReviewBundle:Review');
        $review = $reviewRepository->find($id);

        $pageSize = 5;
        $paginator=$reviewRepository->getPaginateReview($pageSize,$page);
        $totalItems = count($paginator);
        $pagesCount = ceil($totalItems / $pageSize);

        return $this->render('AJTReviewBundle:Reviews:index.html.twig', array(
            "revs"     => $paginator,
            "totalItems" => $totalItems,
            "pagesCount" => $pagesCount,
            "page" => $page
        ));
        
    }

    public function run($id){
        $utils = $this->get('utils');

        $totalScore = $utils->runAnalysis($id);

        $this->updateAnalysis($id, $totalScore);
    }

    public function runAllAction(){

        $em = $this->get('doctrine.orm.entity_manager');
        $reviews = $em->getRepository('AJTReviewBundle:Review')->findAll();

        foreach ($reviews as $key => $review){
            $id = $review->getID();
            $this->run($id);
        }

        return $this->redirectToRoute('ajt_review_index');

    }

    public function updateAnalysis($id, $score){
        $repository = $this->getDoctrine()->getRepository('AJTReviewBundle:Review');
        $review = $repository->find($id);

        $review->setTotal($score["score"]);
        $review->setAnalysis($score["analysis"]);

        $em = $this->get('doctrine.orm.entity_manager');

        $em->persist($review);
        $em->flush();
    }

    public function importAction(){

        $this->get('utils')->import();

        return $this->redirectToRoute('ajt_review_index');

    }

}
