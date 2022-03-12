<?php

namespace App\Entity;

use App\Repository\ReponseRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReponseRepository::class)
 */
class Reponse
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $id_reponse;

    /**
     * @ORM\ManyToOne(targetEntity=Reclamation::class, inversedBy="reponses")
     * @ORM\JoinColumn(nullable=false)
     */
    private $reclamation;

    /**
     * @ORM\Column(type="string", length=55)
     */
    private $Status;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdReponse(): ?int
    {
        return $this->id_reponse;
    }

    public function setIdReponse(?int $id_reponse): self
    {
        $this->id_reponse = $id_reponse;

        return $this;
    }

    public function getReclamation(): ?Reclamation
    {
        return $this->reclamation;
    }

    public function setReclamation(?Reclamation $reclamation): self
    {
        $this->reclamation = $reclamation;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->Status;
    }

    public function setStatus(string $Status): self
    {
        $this->Status = $Status;

        return $this;
    }
}
