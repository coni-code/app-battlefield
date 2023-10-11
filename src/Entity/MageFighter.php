<?php

namespace App\Entity;

use App\Entity\AbstractFighter;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\MageFighterRepository;

#[ORM\Entity(repositoryClass: MageFighterRepository::class)]
class MageFighter extends AbstractFighter
{
    #[ORM\OneToOne(mappedBy: 'mageFighter', targetEntity: StatFighter::class)]
    private StatFighter $stat;

    public function getStat(): StatFighter
    {
        return $this->stat;
    }
    public function setStat(StatFighter $stat): void
    {
        $this->stat = $stat;
    }
    
    public function reduceStat(AbstractFighter $fighter): void
    {
    }
}
