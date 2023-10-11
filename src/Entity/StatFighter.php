<?php

namespace App\Entity;

use App\Repository\StatFighterRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StatFighterRepository::class)]
class StatFighter
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $health = null;

    #[ORM\Column]
    private ?int $armor = null;

    #[ORM\Column]
    private ?int $resilience = null;

    #[ORM\Column]
    private ?int $strength = null;

    #[ORM\Column]
    private ?int $intelligence = null;

    #[ORM\Column]
    private ?int $agility = null;

    #[ORM\Column]
    private ?int $luck = null;

    #[ORM\OneToOne(targetEntity: AbstractFighter::class, inversedBy: 'stat')]
    private AbstractFighter $fighter;

    public function getFighter(): AbstractFighter
    {
        return $this->$fighter;
    }
    public function setFighter(AbstractFighter $fighter): void
    {
        $this->fighter = $fighter;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHealth(): ?float
    {
        return $this->health;
    }

    public function setHealth(float $health): void
    {
        $this->health = $health;
    }

    public function getArmor(): ?int
    {
        return $this->armor;
    }

    public function setArmor(int $armor): void
    {
        $this->armor = $armor;
    }

    public function getResilience(): ?int
    {
        return $this->resilience;
    }

    public function setResilience(int $resilience): void
    {
        $this->resilience = $resilience;
    }

    public function getStrength(): ?int
    {
        return $this->strength;
    }

    public function setStrength(int $strength): void
    {
        $this->strength = $strength;
    }

    public function getIntelligence(): ?int
    {
        return $this->intelligence;
    }

    public function setIntelligence(int $intelligence): void
    {
        $this->intelligence = $intelligence;
    }

    public function getAgility(): ?int
    {
        return $this->agility;
    }

    public function setAgility(int $agility): void
    {
        $this->agility = $agility;
    }

    public function getLuck(): ?int
    {
        return $this->luck;
    }

    public function setLuck(int $luck): void
    {
        $this->luck = $luck;
    }
    protected function getRandomProperty(): int
    {
        
    }
}
