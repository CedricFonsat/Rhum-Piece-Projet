<?php

namespace App\Entity;

use App\Repository\RhumRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RhumRepository::class)
 */
class Rhum
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $rhum_blanc;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $rhum_vieux;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRhumBlanc(): ?string
    {
        return $this->rhum_blanc;
    }

    public function setRhumBlanc(string $rhum_blanc): self
    {
        $this->rhum_blanc = $rhum_blanc;

        return $this;
    }

    public function getRhumVieux(): ?string
    {
        return $this->rhum_vieux;
    }

    public function setRhumVieux(string $rhum_vieux): self
    {
        $this->rhum_vieux = $rhum_vieux;

        return $this;
    }
}
