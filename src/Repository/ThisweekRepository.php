<?php

namespace App\Repository;

use App\Entity\Thisweek;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Thisweek|null find($id, $lockMode = null, $lockVersion = null)
 * @method Thisweek|null findOneBy(array $criteria, array $orderBy = null)
 * @method Thisweek[]    findAll()
 * @method Thisweek[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ThisweekRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Thisweek::class);
    }

    // /**
    //  * @return Thisweek[] Returns an array of Thisweek objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Thisweek
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
