<?php

namespace App\Entity;

use App\Repository\UsageCPURepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UsageCPURepository::class)
 */
class UsageCPU
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $cpu_usage;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $time;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCpuUsage(): ?float
    {
        return $this->cpu_usage;
    }

    public function setCpuUsage(?float $cpu_usage): self
    {
        $this->cpu_usage = $cpu_usage;

        return $this;
    }

    public function getTime(): ?\DateTimeInterface
    {
        return $this->time;
    }

    public function setTime(?\DateTimeInterface $time): self
    {
        $this->time = $time;

        return $this;
    }
}
