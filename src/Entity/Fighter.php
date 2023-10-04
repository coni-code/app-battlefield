<?php

namespace App\Entity;

class Fighter
{
    public string $name;
    public int $health;
    public int $power;
    public int $defense;
    public int $precision;

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): ?string
    {
        return $this->name;
    }
   
    public function setHealth(int $health): void
    {
        $this->health = $health;
    }

    public function getHealth(): ?int
    {
        return $this->health;
    }

    public function setPower(int $power): void
    {
        $this->power = $power;
    }

    public function getPower(): ?int
    {
        return $this->power;
    }

    public function setDefense(int $defense): void
    {
        $this->defense = $defense;
    }

    public function getDefense(): ?int
    {
        return $this->defense;
    }

    public function setPrecision(int $precision): void
    {
        $this->precision = $precision;
    }

    public function getPrecision(): ?int
    {
        return $this->precision;
    }
}
