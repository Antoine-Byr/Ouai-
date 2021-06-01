<?php

namespace App\Repository;

use App\Entity\CommandeHasPlat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CommandeHasPlat|null find($id, $lockMode = null, $lockVersion = null)
 * @method CommandeHasPlat|null findOneBy(array $criteria, array $orderBy = null)
 * @method CommandeHasPlat[]    findAll()
 * @method CommandeHasPlat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CommandeHasRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CommandeHasPlat::class);
    }

    // /**
    //  * @return CommandeHasPlat[] Returns an array of CommandeHasPlat objects
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
    public function findOneBySomeField($value): ?CommandeHasPlat
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
