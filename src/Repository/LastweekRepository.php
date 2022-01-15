<?php

namespace App\Repository;

use App\Entity\Lastweek;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Lastweek|null find($id, $lockMode = null, $lockVersion = null)
 * @method Lastweek|null findOneBy(array $criteria, array $orderBy = null)
 * @method Lastweek[]    findAll()
 * @method Lastweek[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LastweekRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Lastweek::class);
    }

    // /**
    //  * @return Lastweek[] Returns an array of Lastweek objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Lastweek
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
