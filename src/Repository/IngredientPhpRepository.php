<?php

namespace App\Repository;

use App\Entity\IngredientPhp;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method IngredientPhp|null find($id, $lockMode = null, $lockVersion = null)
 * @method IngredientPhp|null findOneBy(array $criteria, array $orderBy = null)
 * @method IngredientPhp[]    findAll()
 * @method IngredientPhp[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IngredientPhpRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, IngredientPhp::class);
    }

    // /**
    //  * @return IngredientPhp[] Returns an array of IngredientPhp objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?IngredientPhp
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
