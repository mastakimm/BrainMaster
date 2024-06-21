<?php

namespace App\Repository;

use App\Entity\Visitors;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Visitors>
 */
class VisitorsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Visitors::class);
    }

    public function findUniqueVisitor($ipAddress, $userAgent)
    {
        return $this->createQueryBuilder('v')
            ->where('v.ip_address = :ip_address')
            ->andWhere('v.user_agent = :user_agent')
            ->setParameter('ip_address', $ipAddress)
            ->setParameter('user_agent', $userAgent)
            ->getQuery()
            ->getOneOrNullResult();
    }

    //    /**
    //     * @return Visitors[] Returns an array of Visitors objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('v')
    //            ->andWhere('v.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('v.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Visitors
    //    {
    //        return $this->createQueryBuilder('v')
    //            ->andWhere('v.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
