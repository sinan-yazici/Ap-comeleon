<?php

namespace App\Repository;

use App\Entity\Present;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Present|null find($id, $lockMode = null, $lockVersion = null)
 * @method Present|null findOneBy(array $criteria, array $orderBy = null)
 * @method Present[]    findAll()
 * @method Present[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PresentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Present::class);
    }

    // /**
    //  * @return Present[] Returns an array of Present objects
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
    public function findOneBySomeField($value): ?Present
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
