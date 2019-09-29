<?php

namespace App\Repository;

use App\Entity\AloiteLaatikko;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method AloiteLaatikko|null find($id, $lockMode = null, $lockVersion = null)
 * @method AloiteLaatikko|null findOneBy(array $criteria, array $orderBy = null)
 * @method AloiteLaatikko[]    findAll()
 * @method AloiteLaatikko[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AloiteLaatikkoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AloiteLaatikko::class);
    }

    // /**
    //  * @return AloiteLaatikko[] Returns an array of AloiteLaatikko objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AloiteLaatikko
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
