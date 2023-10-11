<?php

namespace App\Repository;

use App\Entity\MageFighter;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<MageFighter>
 *
 * @method MageFighter|null find($id, $lockMode = null, $lockVersion = null)
 * @method MageFighter|null findOneBy(array $criteria, array $orderBy = null)
 * @method MageFighter[]    findAll()
 * @method MageFighter[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MageFighterRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MageFighter::class);
    }
}
