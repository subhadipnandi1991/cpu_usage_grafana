<?php

namespace App\Repository;

use App\Entity\UsageNetwork;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UsageNetwork|null find($id, $lockMode = null, $lockVersion = null)
 * @method UsageNetwork|null findOneBy(array $criteria, array $orderBy = null)
 * @method UsageNetwork[]    findAll()
 * @method UsageNetwork[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UsageNetworkRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UsageNetwork::class);
    }

    // /**
    //  * @return UsageNetwork[] Returns an array of UsageNetwork objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UsageNetwork
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
