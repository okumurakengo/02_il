<?php

namespace App\Repository;

use App\Entity\Ddd;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Ddd|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ddd|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ddd[]    findAll()
 * @method Ddd[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DddRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Ddd::class);
    }

//    /**
//     * @return Ddd[] Returns an array of Ddd objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Ddd
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
