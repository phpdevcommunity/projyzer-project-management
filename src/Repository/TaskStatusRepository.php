<?php

namespace App\Repository;

use App\Entity\TaskStatus;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TaskStatus>
 *
 * @method TaskStatus|null find($id, $lockMode = null, $lockVersion = null)
 * @method TaskStatus|null findOneBy(array $criteria, array $orderBy = null)
 * @method TaskStatus[]    findAll()
 * @method TaskStatus[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TaskStatusRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TaskStatus::class);
    }

//    /**
//     * @return TaskStatus[] Returns an array of TaskStatus objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?TaskStatus
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
