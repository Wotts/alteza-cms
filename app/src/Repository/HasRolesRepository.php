<?php

namespace App\Repository;

use App\Entity\HasRoles;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method HasRoles|null find($id, $lockMode = null, $lockVersion = null)
 * @method HasRoles|null findOneBy(array $criteria, array $orderBy = null)
 * @method HasRoles[]    findAll()
 * @method HasRoles[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HasRolesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HasRoles::class);
    }

    // /**
    //  * @return HasRoles[] Returns an array of HasRoles objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?HasRoles
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
