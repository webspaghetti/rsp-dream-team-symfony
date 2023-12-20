<?php

namespace App\Repository;

use App\Entity\Clanky;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Clanky>
 *
 * @method Clanky|null find($id, $lockMode = null, $lockVersion = null)
 * @method Clanky|null findOneBy(array $criteria, array $orderBy = null)
 * @method Clanky[]    findAll()
 * @method Clanky[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClankyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Clanky::class);
    }

//    /**
//     * @return Clanky[] Returns an array of Clanky objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Clanky
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
