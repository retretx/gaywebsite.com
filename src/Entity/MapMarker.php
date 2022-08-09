<?php

namespace App\Entity;

use App\Repository\MapMarkerRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MapMarkerRepository::class)]
class MapMarker
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
     * @var float|null
     */
    #[ORM\Column]
    private ?float $latitude = null;

    /**
     * @var float|null
     */
    #[ORM\Column]
    private ?float $longitude = null;

    /**
     * @var string|null
     */
    #[ORM\Column(length: 255)]
    private ?string $iconUrl = null;


    /**
     * @param int|null $id
     * @param string|null $title
     * @param float|null $latitude
     * @param float|null $longitude
     * @param string|null $iconUrl
     */
    public function __construct(
        ?int $id,
        ?string $title,
        ?float $latitude,
        ?float $longitude,
        ?string $iconUrl
    )
    {
        $this->id = $id;
        $this->title = $title;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
        $this->iconUrl = $iconUrl;
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
     * @return float|null
     */
    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    /**
     * @param float $latitude
     * @return $this
     */
    public function setLatitude(float $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    /**
     * @param float $longitude
     * @return $this
     */
    public function setLongitude(float $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getIconUrl(): ?string
    {
        return $this->iconUrl;
    }

    /**
     * @param string $iconUrl
     * @return $this
     */
    public function setIconUrl(string $iconUrl): self
    {
        $this->iconUrl = $iconUrl;

        return $this;
    }
}
