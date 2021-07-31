<?php

namespace App\Entity;

use App\Repository\UsageMemoryRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UsageMemoryRepository::class)
 */
class UsageMemory
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
    private $total_memory;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $used_memory;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $free_memory;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $shared_memory;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $cached_memory;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $available_memory;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $time;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTotalMemory(): ?float
    {
        return $this->total_memory;
    }

    public function setTotalMemory(?float $total_memory): self
    {
        $this->total_memory = $total_memory;

        return $this;
    }

    public function getUsedMemory(): ?float
    {
        return $this->used_memory;
    }

    public function setUsedMemory(?float $used_memory): self
    {
        $this->used_memory = $used_memory;

        return $this;
    }

    public function getFreeMemory(): ?float
    {
        return $this->free_memory;
    }

    public function setFreeMemory(?float $free_memory): self
    {
        $this->free_memory = $free_memory;

        return $this;
    }

    public function getSharedMemory(): ?float
    {
        return $this->shared_memory;
    }

    public function setSharedMemory(?float $shared_memory): self
    {
        $this->shared_memory = $shared_memory;

        return $this;
    }

    public function getCachedMemory(): ?float
    {
        return $this->cached_memory;
    }

    public function setCachedMemory(?float $cached_memory): self
    {
        $this->cached_memory = $cached_memory;

        return $this;
    }

    public function getAvailableMemory(): ?float
    {
        return $this->available_memory;
    }

    public function setAvailableMemory(?float $available_memory): self
    {
        $this->available_memory = $available_memory;

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
