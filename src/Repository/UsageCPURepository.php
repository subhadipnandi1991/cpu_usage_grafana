<?php

namespace App\Repository;

use App\Entity\UsageCPU;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UsageCPU|null find($id, $lockMode = null, $lockVersion = null)
 * @method UsageCPU|null findOneBy(array $criteria, array $orderBy = null)
 * @method UsageCPU[]    findAll()
 * @method UsageCPU[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UsageCPURepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UsageCPU::class);
    }

    // /**
    //  * @return UsageCPU[] Returns an array of UsageCPU objects
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
    public function findOneBySomeField($value): ?UsageCPU
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
