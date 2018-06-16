<?php

namespace App\Repository;

use App\Entity\Ccc;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Ccc|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ccc|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ccc[]    findAll()
 * @method Ccc[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CccRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Ccc::class);
    }

//    /**
//     * @return Ccc[] Returns an array of Ccc objects
//     */
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
    public function findOneBySomeField($value): ?Ccc
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
