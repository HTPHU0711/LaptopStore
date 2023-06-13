<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
<<<<<<< HEAD
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
=======
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
>>>>>>> 549bb062610408a1a0f861b9daea46ee4407f875
 */
class Product
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Product_Name;

    /**
     * @ORM\Column(type="bigint")
     */
    private $Price;

    /**
     * @ORM\Column(type="bigint")
     */
    private $oldPrice;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $SmallDesc;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $DetailDesc;

    /**
     * @ORM\Column(type="datetime")
     */
    private $ProDate;

    /**
     * @ORM\Column(type="integer")
     */
    private $Pro_qty;

<<<<<<< HEAD
    /**
     * @ORM\Column(type="string", length=255)
=======
/**
     * @ORM\ManyToOne(targetEntity=Supplier::class, inversedBy="products")
>>>>>>> 549bb062610408a1a0f861b9daea46ee4407f875
     */

    private $supplier;

    /**
     * @ORM\ManyToOne(targetEntity=Category::class, inversedBy="products")
     */
    private $categories;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProductName(): ?string
    {
        return $this->Product_Name;
    }

    public function setProductName(string $Product_Name): self
    {
        $this->Product_Name = $Product_Name;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->Price;
    }

    public function setPrice(string $Price): self
    {
        $this->Price = $Price;

        return $this;
    }

    public function getOldPrice(): ?string
    {
        return $this->oldPrice;
    }

    public function setOldPrice(string $oldPrice): self
    {
        $this->oldPrice = $oldPrice;

        return $this;
    }

    public function getSmallDesc(): ?string
    {
        return $this->SmallDesc;
    }

    public function setSmallDesc(string $SmallDesc): self
    {
        $this->SmallDesc = $SmallDesc;

        return $this;
    }

    public function getDetailDesc(): ?string
    {
        return $this->DetailDesc;
    }

    public function setDetailDesc(string $DetailDesc): self
    {
        $this->DetailDesc = $DetailDesc;

        return $this;
    }

    public function getProDate(): ?\DateTimeInterface
    {
        return $this->ProDate;
    }

    public function setProDate(\DateTimeInterface $ProDate): self
    {
        $this->ProDate = $ProDate;

        return $this;
    }

    public function getProQty(): ?int
    {
        return $this->Pro_qty;
    }

    public function setProQty(int $Pro_qty): self
    {
        $this->Pro_qty = $Pro_qty;

        return $this;
    }

    public function getSupplier(): ?Supplier
    {
        return $this->supplier;
    }

    public function setSupplier(?Supplier $supplier): self
    {
        $this->supplier = $supplier;

        return $this;
    }

    public function getCategories(): ?Category
    {
        return $this->categories;
    }

    public function setCategories(?Category $categories): self
    {
        $this->categories = $categories;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }
<<<<<<< HEAD
=======
    public function __toString()
    {
        return $this->getProDate();
    }
>>>>>>> 549bb062610408a1a0f861b9daea46ee4407f875
}
