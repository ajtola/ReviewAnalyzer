<?php

namespace AJT\ReviewBundle\Repository;

use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\ORM\EntityRepository;

/**
 * NegativeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class NegativeRepository extends EntityRepository
{
	public function getPaginateNegative($pageSize,$currentPage){
        $em=$this->getEntityManager();
        
        //DQL
        $dql = "SELECT negative FROM AJT\ReviewBundle\Entity\Negative negative ORDER BY negative.id ASC";
        $query = $em->createQuery($dql)
                               ->setFirstResult($pageSize * ($currentPage - 1))
                               ->setMaxResults($pageSize);
 
        $paginator = new Paginator($query, $fetchJoinCollection = true);
 
        return $paginator;
    }
}
