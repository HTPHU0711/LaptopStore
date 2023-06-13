<?php

namespace App\Entity;

use App\Repository\SupplierRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
<<<<<<< HEAD
 * @ORM\Entity(repositoryClass=SupplierRepository::class)
=======
 * @ORM\Entity(repositoryClass="App\Repository\SupplierRepository")
>>>>>>> 549bb062610408a1a0f861b9daea46ee4407f875
 */
class Supplier
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
    private $SupName;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $Tel;

    /**
     * @ORM\OneToMany(targetEntity=Product::class, mappedBy="supplier")
     */
    private $products;

    public function __construct()
    {
        $this->products = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSupName(): ?string
    {
        return $this->SupName;
    }

    public function setSupName(string $SupName): self
    {
        $this->SupName = $SupName;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->Tel;
    }

    public function setTel(string $Tel): self
    {
        $this->Tel = $Tel;

        return $this;
    }

    /**
     * @return Collection<int, Product>
     */
    public function getProducts(): Collection
    {
        return $this->products;
    }

    public function addProduct(Product $product): self
    {
        if (!$this->products->contains($product)) {
            $this->products[] = $product;
            $product->setSupplier($this);
        }

        return $this;
    }

    public function removeProduct(Product $product): self
    {
        if ($this->products->removeElement($product)) {
            // set the owning side to null (unless already changed)
            if ($product->getSupplier() === $this) {
                $product->setSupplier(null);
            }
        }

        return $this;
    }
<<<<<<< HEAD
=======
    public function __toString()
    {
        return $this->getSupName();
    }
>>>>>>> 549bb062610408a1a0f861b9daea46ee4407f875
}
