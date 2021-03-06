<?php

namespace AJT\ReviewBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * TopicRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TopicRepository extends EntityRepository
{
	public function getPaginateTopic($pageSize,$currentPage){
        $em=$this->getEntityManager();
        
        //DQL
        $dql = "SELECT topic FROM AJT\ReviewBundle\Entity\Topic topic ORDER BY topic.id ASC";
        $query = $em->createQuery($dql)
                               ->setFirstResult($pageSize * ($currentPage - 1))
                               ->setMaxResults($pageSize);
 
        $paginator = new Paginator($query, $fetchJoinCollection = true);
 
        return $paginator;
    }
}
