<?php

namespace App\Repository;

use App\Entity\Fff;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Fff|null find($id, $lockMode = null, $lockVersion = null)
 * @method Fff|null findOneBy(array $criteria, array $orderBy = null)
 * @method Fff[]    findAll()
 * @method Fff[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FffRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Fff::class);
    }

//    /**
//     * @return Fff[] Returns an array of Fff objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Fff
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
