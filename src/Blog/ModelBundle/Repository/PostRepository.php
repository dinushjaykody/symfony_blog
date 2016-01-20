<?php
// src/AppBundle/Entity/ProductRepository.php

namespace Blog\ModelBundle\Repository;

use Doctrine\ORM\EntityRepository;

class PostRepository extends EntityRepository
{
    /**
     * @param int $num
     * @return \Doctrine\ORM\QueryBuilder
     */
    public function findLatest($num)
    {

        $qb = $this->getQueryBuilder()
            ->orderBy('p.createdAt','DESC')
            ->setMaxResults($num);
        return $qb->getQuery()->getResult();

    }

    /**
     * @return \Doctrine\ORM\QueryBuilder
     */
    private function getQueryBuilder()
    {
        $em = $this->getEntityManager();
        $qb = $em->getRepository('ModelBundle:Post')
            ->createQueryBuilder('p');

        return $qb;
    }
}