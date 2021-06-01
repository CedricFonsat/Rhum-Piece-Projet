<?php

namespace App\Entity;

use App\Repository\ProduitDeriveRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProduitDeriveRepository::class)
 */
class ProduitDerive
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
    private $verre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sac_cadeaux;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $rhum_arrange;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVerre(): ?string
    {
        return $this->verre;
    }

    public function setVerre(string $verre): self
    {
        $this->verre = $verre;

        return $this;
    }

    public function getSacCadeaux(): ?string
    {
        return $this->sac_cadeaux;
    }

    public function setSacCadeaux(string $sac_cadeaux): self
    {
        $this->sac_cadeaux = $sac_cadeaux;

        return $this;
    }

    public function getRhumArrange(): ?string
    {
        return $this->rhum_arrange;
    }

    public function setRhumArrange(string $rhum_arrange): self
    {
        $this->rhum_arrange = $rhum_arrange;

        return $this;
    }
}
