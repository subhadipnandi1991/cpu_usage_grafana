<?php

namespace App\Entity;

use App\Repository\UsageNetworkRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UsageNetworkRepository::class)
 */
class UsageNetwork
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
    private $lo_recv_bytes;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $lo_recv_pckts;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $lo_trns_bytes;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $lo_trns_pckts;

    /**
     * @ORM\Column(type="float", nullable=true)
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
     * @ORM\Column(type="float", nullable=true)
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

    public function getLoRecvBytes(): ?float
    {
        return $this->lo_recv_bytes;
    }

    public function setLoRecvBytes(?float $lo_recv_bytes): self
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

    public function getLoTrnsBytes(): ?float
    {
        return $this->lo_trns_bytes;
    }

    public function setLoTrnsBytes(?float $lo_trns_bytes): self
    {
        $this->lo_trns_bytes = $lo_trns_bytes;

        return $this;
    }

    public function getLoTrnsPckts(): ?int
    {
        return $this->lo_trns_pckts;
    }

    public function setLoTrnsPckts(?int $lo_trns_pckts): self
    {
        $this->lo_trns_pckts = $lo_trns_pckts;

        return $this;
    }

    public function getWlp7s0RecvBytes(): ?float
    {
        return $this->wlp7s0_recv_bytes;
    }

    public function setWlp7s0RecvBytes(?float $wlp7s0_recv_bytes): self
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

    public function getWlp7s0TrnsBytes(): ?float
    {
        return $this->wlp7s0_trns_bytes;
    }

    public function setWlp7s0TrnsBytes(?float $wlp7s0_trns_bytes): self
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
