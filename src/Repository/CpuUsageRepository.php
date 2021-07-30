<?php

namespace App\Repository;

use App\Entity\CpuUsage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CpuUsage|null find($id, $lockMode = null, $lockVersion = null)
 * @method CpuUsage|null findOneBy(array $criteria, array $orderBy = null)
 * @method CpuUsage[]    findAll()
 * @method CpuUsage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CpuUsageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CpuUsage::class);
    }

    // /**
    //  * @return CpuUsage[] Returns an array of CpuUsage objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CpuUsage
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
