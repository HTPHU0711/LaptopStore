<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
<<<<<<< HEAD
 * @ORM\Entity(repositoryClass=CategoryRepository::class)
=======
 * @ORM\Entity(repositoryClass="App\Repository\CategoryRepository")
>>>>>>> 549bb062610408a1a0f861b9daea46ee4407f875
 */
class Category
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $Cat_Name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Cat_Des;

    /**
     * @ORM\OneToMany(targetEntity=Product::class, mappedBy="categories")
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

    public function getCatName(): ?string
    {
        return $this->Cat_Name;
    }

    public function setCatName(string $Cat_Name): self
    {
        $this->Cat_Name = $Cat_Name;

        return $this;
    }

    public function getCatDes(): ?string
    {
        return $this->Cat_Des;
    }

    public function setCatDes(string $Cat_Des): self
    {
        $this->Cat_Des = $Cat_Des;

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
            $product->setCategories($this);
        }

        return $this;
    }

    public function removeProduct(Product $product): self
    {
        if ($this->products->removeElement($product)) {
            // set the owning side to null (unless already changed)
            if ($product->getCategories() === $this) {
                $product->setCategories(null);
            }
        }

        return $this;
    }
}
