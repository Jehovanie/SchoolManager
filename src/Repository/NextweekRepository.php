<?php

namespace App\Repository;

use App\Entity\Nextweek;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Nextweek|null find($id, $lockMode = null, $lockVersion = null)
 * @method Nextweek|null findOneBy(array $criteria, array $orderBy = null)
 * @method Nextweek[]    findAll()
 * @method Nextweek[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NextweekRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Nextweek::class);
    }

    // /**
    //  * @return Nextweek[] Returns an array of Nextweek objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Nextweek
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
