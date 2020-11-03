<?php

namespace App\Repository;

use App\Entity\Project;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Project|null find($id, $lockMode = null, $lockVersion = null)
 * @method Project|null findOneBy(array $criteria, array $orderBy = null)
 * @method Project[]    findAll()
 * @method Project[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProjectRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Project::class);
    }

    public function findProjects()
    {
        $qb = $this->createQueryBuilder('p');

        $qb
            ->addSelect('i, t, s, j')
            ->leftJoin('p.images', 'i')
            ->leftJoin('p.tags', 't')
            ->leftJoin('p.school', 's')
            ->leftJoin('p.job', 'j')
        ;
         
        return $qb->getQuery()->getResult();
    }

    public function findProject($id)
    {
        $qb = $this->createQueryBuilder('p');

        $qb
            ->addSelect('i, t, s, j')
            ->leftJoin('p.images', 'i')
            ->leftJoin('p.tags', 't')
            ->leftJoin('p.school', 's')
            ->leftJoin('p.job', 'j')
            ->where('p.id = :id')
            ->setParameter('id', $id)
        ;
         
        return $qb->getQuery()->getOneOrNullResult();
    }

    public function findProjectByType($type)
    {
        $qb = $this->createQueryBuilder('p');

        $qb
            ->addSelect('i, t, s, j')
            ->leftJoin('p.images', 'i')
            ->leftJoin('p.tags', 't')
            ->leftJoin('p.school', 's')
            ->leftJoin('p.job', 'j')
        ;

        if ($type == 'school') {
            $qb->where('p.school IS NOT NULL');
        }
        
        if ($type == 'job') {
            $qb->where('p.job IS NOT NULL');
        }

        if ($type == 'perso') {
            $qb
                ->where('p.job IS NULL')
                ->andWhere('p.school IS NULL')
            ;
        } 
         
        return $qb->getQuery()->getResult();
    }
}


