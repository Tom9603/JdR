<?php

namespace App\Entity;

use App\Repository\HpRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HpRepository::class)]
class Hp
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $hp = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHp(): ?int
    {
        return $this->hp;
    }

    public function setHp(int $hp): static
    {
        $this->hp = $hp;

        return $this;
    }
}
