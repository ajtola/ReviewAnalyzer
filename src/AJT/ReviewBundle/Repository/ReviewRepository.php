<?php

namespace AJT\ReviewBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * ReviewRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ReviewRepository extends EntityRepository
{
	public function getPaginateReview($pageSize,$currentPage){
        $em=$this->getEntityManager();
        
        //DQL
        $dql = "SELECT review FROM AJT\ReviewBundle\Entity\Review review ORDER BY review.id ASC";
        $query = $em->createQuery($dql)
                               ->setFirstResult($pageSize * ($currentPage - 1))
                               ->setMaxResults($pageSize);
 
        $paginator = new Paginator($query, $fetchJoinCollection = true);
 
        return $paginator;
    }
}