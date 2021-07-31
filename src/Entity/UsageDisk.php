<?php

namespace App\Entity;

use App\Repository\UsageDiskRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UsageDiskRepository::class)
 */
class UsageDisk
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
    private $total_disk;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $free_disk;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $used_disk;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $disk_usage;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $time;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTotalDisk(): ?float
    {
        return $this->total_disk;
    }

    public function setTotalDisk(?float $total_disk): self
    {
        $this->total_disk = $total_disk;

        return $this;
    }

    public function getFreeDisk(): ?float
    {
        return $this->free_disk;
    }

    public function setFreeDisk(?float $free_disk): self
    {
        $this->free_disk = $free_disk;

        return $this;
    }

    public function getUsedDisk(): ?float
    {
        return $this->used_disk;
    }

    public function setUsedDisk(?float $used_disk): self
    {
        $this->used_disk = $used_disk;

        return $this;
    }

    public function getDiskUsage(): ?int
    {
        return $this->disk_usage;
    }

    public function setDiskUsage(?int $disk_usage): self
    {
        $this->disk_usage = $disk_usage;

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
