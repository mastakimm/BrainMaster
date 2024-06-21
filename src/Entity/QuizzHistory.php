<?php

namespace App\Entity;

use App\Repository\QuizzHistoryRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: QuizzHistoryRepository::class)]
class QuizzHistory
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'quizzHistories')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    #[ORM\Column]
    private ?int $score = null;

    #[ORM\Column]
    private ?int $total_questions = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $realised_at = null;

    #[ORM\Column(length: 255)]
    private ?string $category_name = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getScore(): ?int
    {
        return $this->score;
    }

    public function setScore(int $score): static
    {
        $this->score = $score;

        return $this;
    }

    public function getTotalQuestions(): ?int
    {
        return $this->total_questions;
    }

    public function setTotalQuestions(int $total_questions): static
    {
        $this->total_questions = $total_questions;

        return $this;
    }

    public function getRealisedAt(): ?\DateTimeImmutable
    {
        return $this->realised_at;
    }

    public function setRealisedAt(\DateTimeImmutable $realised_at): static
    {
        $this->realised_at = $realised_at;

        return $this;
    }

    public function getCategoryName(): ?string
    {
        return $this->category_name;
    }

    public function setCategoryName(string $category_name): static
    {
        $this->category_name = $category_name;

        return $this;
    }
}