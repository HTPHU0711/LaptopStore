<?php

namespace App\Entity;

use App\Repository\OrdersRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OrdersRepository::class)
 */
class Orders
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $OrderDate;

    /**
     * @ORM\Column(type="date")
     */
    private $DeliveryDate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Delivery_loca;

    /**
     * @ORM\ManyToOne(targetEntity=Customer::class, inversedBy="y")
     */
    private $customer;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOrderDate(): ?\DateTimeInterface
    {
        return $this->OrderDate;
    }

    public function setOrderDate(\DateTimeInterface $OrderDate): self
    {
        $this->OrderDate = $OrderDate;

        return $this;
    }

    public function getDeliveryDate(): ?\DateTimeInterface
    {
        return $this->DeliveryDate;
    }

    public function setDeliveryDate(\DateTimeInterface $DeliveryDate): self
    {
        $this->DeliveryDate = $DeliveryDate;

        return $this;
    }

    public function getDeliveryLoca(): ?string
    {
        return $this->Delivery_loca;
    }

    public function setDeliveryLoca(string $Delivery_loca): self
    {
        $this->Delivery_loca = $Delivery_loca;

        return $this;
    }

    public function getCustomer(): ?Customer
    {
        return $this->customer;
    }

    public function setCustomer(?Customer $customer): self
    {
        $this->customer = $customer;

        return $this;
    }
}
