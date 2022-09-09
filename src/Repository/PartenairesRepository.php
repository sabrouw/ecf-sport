<?php

namespace App\Repository;

use App\Entity\Partenaires;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @extends ServiceEntityRepository<Partenaires>
 *
 * @method Partenaires|null find($id, $lockMode = null, $lockVersion = null)
 * @method Partenaires|null findOneBy(array $criteria, array $orderBy = null)
 * @method Partenaires[]    findAll()
 * @method Partenaires[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PartenairesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Partenaires::class);
    }

    #[Route ('/resultat',name:'resultat_partenaire')]
    public function searchPartenaire($search): array
    {
    $qb = $this->createQueryBuilder(alias:'partenaires');
    
    $query = $qb->select(select:'partenaires')
    //evite les injections sql par un hacker
    ->where('partenaires.name LIKE :search')
    ->setParameter(key:'search',value:'%'.$search.'%')
    ->getQuery();
    return $query ->getResult();
}

    public function add(Partenaires $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Partenaires $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Partenaires[] Returns an array of Partenaires objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Partenaires
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
