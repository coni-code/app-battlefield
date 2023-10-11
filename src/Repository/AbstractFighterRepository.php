<?php

namespace App\Repository;

use App\Entity\AbstractFighter;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AbstractFighter>
 *
 * @method AbstractFighter|null find($id, $lockMode = null, $lockVersion = null)
 * @method AbstractFighter|null findOneBy(array $criteria, array $orderBy = null)
 * @method AbstractFighter[]    findAll()
 * @method AbstractFighter[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AbstractFighterRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AbstractFighter::class);
    }
}
