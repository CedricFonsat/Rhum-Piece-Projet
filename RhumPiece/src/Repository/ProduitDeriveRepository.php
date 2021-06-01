<?php

namespace App\Repository;

use App\Entity\ProduitDerive;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ProduitDerive|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProduitDerive|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProduitDerive[]    findAll()
 * @method ProduitDerive[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProduitDeriveRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProduitDerive::class);
    }

    // /**
    //  * @return ProduitDerive[] Returns an array of ProduitDerive objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ProduitDerive
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
