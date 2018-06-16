<?php

namespace App\Repository;

use App\Entity\Ggg;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Ggg|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ggg|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ggg[]    findAll()
 * @method Ggg[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GggRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Ggg::class);
    }

//    /**
//     * @return Ggg[] Returns an array of Ggg objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Ggg
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
