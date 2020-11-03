<?php

namespace App\Repository;

use App\Entity\Tag;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Tag|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tag|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tag[]    findAll()
 * @method Tag[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TagRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tag::class);
    }

    public function findTag($tag)
    {
        $qb = $this->createQueryBuilder('t');

        $qb
            ->addSelect('p, i, pt, s, j')
            ->leftJoin('t.projects', 'p')
            ->leftJoin('p.images', 'i')
            ->leftJoin('p.tags', 'pt')
            ->leftJoin('p.school', 's')
            ->leftJoin('p.job', 'j')
            ->where('t.name = :tag')
            ->setParameter('tag', $tag)
        ;
         
        return $qb->getQuery()->getOneOrNullResult();
    }
}
