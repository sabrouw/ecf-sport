<?php

namespace App\Repository;

use App\Entity\Structures;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @extends ServiceEntityRepository<Structures>
 *
 * @method Structures|null find($id, $lockMode = null, $lockVersion = null)
 * @method Structures|null findOneBy(array $criteria, array $orderBy = null)
 * @method Structures[]    findAll()
 * @method Structures[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StructuresRepository extends ServiceEntityRepository
{#[Route('/search',name:'resultat_structure')]
    public function searchStructure($search): array
    {
    $qb = $this->createQueryBuilder(alias:'structures');
    
    $query = $qb->select(select:'structures')
    //evite les injections sql par un hacker
    ->where('structures.name LIKE :search')
    ->setParameter(key:'search',value:'%'.$search.'%')
    ->getQuery();
    return $query ->getResult();
}


    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Structures::class);
    }

    public function add(Structures $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Structures $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Structures[] Returns an array of Structures objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Structures
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
