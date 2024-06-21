<?php

namespace App\Entity;

use App\Repository\VisitorsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VisitorsRepository::class)]
class Visitors
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $ip_adress = null;

    #[ORM\Column(length: 255)]
    private ?string $user_agent = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $visited_at = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIpAdress(): ?string
    {
        return $this->ip_adress;
    }

    public function setIpAdress(string $ip_adress): static
    {
        $this->ip_adress = $ip_adress;

        return $this;
    }

    public function getUserAgent(): ?string
    {
        return $this->user_agent;
    }

    public function setUserAgent(string $user_agent): static
    {
        $this->user_agent = $user_agent;

        return $this;
    }

    public function getVisitedAt(): ?\DateTimeImmutable
    {
        return $this->visited_at;
    }

    public function setVisitedAt(\DateTimeImmutable $visited_at): static
    {
        $this->visited_at = $visited_at;

        return $this;
    }
}
