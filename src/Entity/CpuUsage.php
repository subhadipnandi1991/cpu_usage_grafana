<?php

namespace App\Entity;

use App\Repository\CpuUsageRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CpuUsageRepository::class)
 */
class CpuUsage
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="bigint", nullable=true)
     */
    private $lo_recv_bytes;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $lo_recv_pckts;

    /**
     * @ORM\Column(type="bigint", nullable=true)
     */
    private $lo_trns_bytes;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $lo_trbs_pckts;

    /**
     * @ORM\Column(type="bigint", nullable=true)
     */
    private $wlp7s0_recv_bytes;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $wlp7s0_recv_pckts;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $wlp7s0_recv_frms;

    /**
     * @ORM\Column(type="bigint", nullable=true)
     */
    private $wlp7s0_trns_bytes;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $wlp7s0_trns_pckts;

    /**
     * @ORM\Column(type="datetime")
     */
    private $time;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLoRecvBytes(): ?string
    {
        return $this->lo_recv_bytes;
    }

    public function setLoRecvBytes(?string $lo_recv_bytes): self
    {
        $this->lo_recv_bytes = $lo_recv_bytes;

        return $this;
    }

    public function getLoRecvPckts(): ?int
    {
        return $this->lo_recv_pckts;
    }

    public function setLoRecvPckts(?int $lo_recv_pckts): self
    {
        $this->lo_recv_pckts = $lo_recv_pckts;

        return $this;
    }

    public function getLoTrnsBytes(): ?string
    {
        return $this->lo_trns_bytes;
    }

    public function setLoTrnsBytes(?string $lo_trns_bytes): self
    {
        $this->lo_trns_bytes = $lo_trns_bytes;

        return $this;
    }

    public function getLoTrbsPckts(): ?int
    {
        return $this->lo_trbs_pckts;
    }

    public function setLoTrbsPckts(?int $lo_trbs_pckts): self
    {
        $this->lo_trbs_pckts = $lo_trbs_pckts;

        return $this;
    }

    public function getWlp7s0RecvBytes(): ?string
    {
        return $this->wlp7s0_recv_bytes;
    }

    public function setWlp7s0RecvBytes(?string $wlp7s0_recv_bytes): self
    {
        $this->wlp7s0_recv_bytes = $wlp7s0_recv_bytes;

        return $this;
    }

    public function getWlp7s0RecvPckts(): ?int
    {
        return $this->wlp7s0_recv_pckts;
    }

    public function setWlp7s0RecvPckts(?int $wlp7s0_recv_pckts): self
    {
        $this->wlp7s0_recv_pckts = $wlp7s0_recv_pckts;

        return $this;
    }

    public function getWlp7s0RecvFrms(): ?int
    {
        return $this->wlp7s0_recv_frms;
    }

    public function setWlp7s0RecvFrms(?int $wlp7s0_recv_frms): self
    {
        $this->wlp7s0_recv_frms = $wlp7s0_recv_frms;

        return $this;
    }

    public function getWlp7s0TrnsBytes(): ?string
    {
        return $this->wlp7s0_trns_bytes;
    }

    public function setWlp7s0TrnsBytes(string $wlp7s0_trns_bytes): self
    {
        $this->wlp7s0_trns_bytes = $wlp7s0_trns_bytes;

        return $this;
    }

    public function getWlp7s0TrnsPckts(): ?int
    {
        return $this->wlp7s0_trns_pckts;
    }

    public function setWlp7s0TrnsPckts(?int $wlp7s0_trns_pckts): self
    {
        $this->wlp7s0_trns_pckts = $wlp7s0_trns_pckts;

        return $this;
    }

    public function getTime(): ?\DateTimeInterface
    {
        return $this->time;
    }

    public function setTime(\DateTimeInterface $time): self
    {
        $this->time = $time;

        return $this;
    }
}
