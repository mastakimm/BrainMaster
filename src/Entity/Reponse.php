<?php

namespace App\Entity;

use App\Repository\ReponseRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReponseRepository::class)]
class Reponse
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Question::class, inversedBy: 'reponses')]
    #[ORM\JoinColumn(name: 'id_question', referencedColumnName: 'id', nullable: false)]
    private ?Question $question = null;

    #[ORM\Column(length: 255)]
    private ?string $reponse = null;

    #[ORM\Column]
    private ?bool $reponse_expected = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuestion(): ?Question
    {
        return $this->question;
    }

    public function setQuestion(?Question $question): static
    {
        $this->question = $question;

        return $this;
    }

    public function getReponse(): ?string
    {
        return $this->reponse;
    }

    public function setReponse(string $reponse): static
    {
        $this->reponse = $reponse;

        return $this;
    }

    public function isReponseExpected(): ?bool
    {
        return $this->reponse_expected;
    }

    public function setReponseExpected(bool $reponse_expected): static
    {
        $this->reponse_expected = $reponse_expected;

        return $this;
    }
}
