<?php

namespace App\Repository;

use App\Entity\UsageDisk;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UsageDisk|null find($id, $lockMode = null, $lockVersion = null)
 * @method UsageDisk|null findOneBy(array $criteria, array $orderBy = null)
 * @method UsageDisk[]    findAll()
 * @method UsageDisk[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UsageDiskRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UsageDisk::class);
    }

    // /**
    //  * @return UsageDisk[] Returns an array of UsageDisk objects
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
    public function findOneBySomeField($value): ?UsageDisk
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
