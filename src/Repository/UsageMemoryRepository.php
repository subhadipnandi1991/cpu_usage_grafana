<?php

namespace App\Repository;

use App\Entity\UsageMemory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UsageMemory|null find($id, $lockMode = null, $lockVersion = null)
 * @method UsageMemory|null findOneBy(array $criteria, array $orderBy = null)
 * @method UsageMemory[]    findAll()
 * @method UsageMemory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UsageMemoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UsageMemory::class);
    }

    // /**
    //  * @return UsageMemory[] Returns an array of UsageMemory objects
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
    public function findOneBySomeField($value): ?UsageMemory
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
