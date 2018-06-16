<?php

namespace App\Repository;

use App\Entity\Bbb;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Bbb|null find($id, $lockMode = null, $lockVersion = null)
 * @method Bbb|null findOneBy(array $criteria, array $orderBy = null)
 * @method Bbb[]    findAll()
 * @method Bbb[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BbbRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Bbb::class);
    }

//    /**
//     * @return Bbb[] Returns an array of Bbb objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Bbb
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
