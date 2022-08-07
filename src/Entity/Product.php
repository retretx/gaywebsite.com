<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
class Product
{
    /**
     * @var int|null
     */
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    /**
     * @var string|null
     */
    #[ORM\Column(length: 255)]
    private ?string $title = null;

    /**
     * @var string|null
     */
    #[ORM\Column(length: 255)]
    private ?string $description = null;

    /**
     * @var float|null
     */
    #[ORM\Column]
    private ?float $cost = null;

    /**
     * @var string|null
     */
    #[ORM\Column(length: 255)]
    private ?string $dimension = null;

    /**
     * @var string|null
     */
    #[ORM\Column(length: 255)]
    private ?string $photoUrl = null;

    /**
     * @param int|null $id
     * @param string|null $title
     * @param string|null $description
     * @param float|null $cost
     * @param string|null $dimension
     * @param string|null $photoUrl
     */
    public function __construct
    (
        ?int    $id,
        ?string $title,
        ?string $description,
        ?float  $cost,
        ?string $dimension,
        ?string $photoUrl,
    )
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->cost = $cost;
        $this->dimension = $dimension;
        $this->photoUrl = $photoUrl;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getCost(): ?float
    {
        return $this->cost;
    }

    /**
     * @param float $cost
     * @return $this
     */
    public function setCost(float $cost): self
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDimension(): ?string
    {
        return $this->dimension;
    }

    /**
     * @param string $dimension
     * @return $this
     */
    public function setDimension(string $dimension): self
    {
        $this->dimension = $dimension;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPhotoUrl(): ?string
    {
        return $this->photoUrl;
    }

    /**
     * @param string $photoUrl
     * @return $this
     */
    public function setPhotoUrl(string $photoUrl): self
    {
        $this->photoUrl = $photoUrl;

        return $this;
    }
}
