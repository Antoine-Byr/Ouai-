<?php

namespace App\Repository;

use App\Entity\Sushi;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Sushi|null find($id, $lockMode = null, $lockVersion = null)
 * @method Sushi|null findOneBy(array $criteria, array $orderBy = null)
 * @method Sushi[]    findAll()
 * @method Sushi[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SushiRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Sushi::class);
    }

    // /**
    //  * @return Sushi[] Returns an array of Sushi objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Sushi
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
