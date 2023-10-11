<?php

namespace App\Repository;

use App\Entity\StatFighter;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<StatFighter>
 *
 * @method StatFighter|null find($id, $lockMode = null, $lockVersion = null)
 * @method StatFighter|null findOneBy(array $criteria, array $orderBy = null)
 * @method StatFighter[]    findAll()
 * @method StatFighter[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StatFighterRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StatFighter::class);
    }
}
