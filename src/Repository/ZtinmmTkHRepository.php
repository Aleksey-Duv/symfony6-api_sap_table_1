<?php

namespace App\Repository;

use App\Entity\ZtinmmTkH;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ZtinmmTkH>
 *
 * @method ZtinmmTkH|null find($id, $lockMode = null, $lockVersion = null)
 * @method ZtinmmTkH|null findOneBy(array $criteria, array $orderBy = null)
 * @method ZtinmmTkH[]    findAll()
 * @method ZtinmmTkH[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ZtinmmTkHRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ZtinmmTkH::class);
    }

    public function save(ZtinmmTkH $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ZtinmmTkH $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ZtinmmTkH[] Returns an array of ZtinmmTkH objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('z')
//            ->andWhere('z.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('z.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ZtinmmTkH
//    {
//        return $this->createQueryBuilder('z')
//            ->andWhere('z.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
