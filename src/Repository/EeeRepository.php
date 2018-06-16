<?php

namespace App\Repository;

use App\Entity\Eee;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Eee|null find($id, $lockMode = null, $lockVersion = null)
 * @method Eee|null findOneBy(array $criteria, array $orderBy = null)
 * @method Eee[]    findAll()
 * @method Eee[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EeeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Eee::class);
    }

//    /**
//     * @return Eee[] Returns an array of Eee objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Eee
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
