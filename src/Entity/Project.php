<?php

namespace App\Entity;

use App\Repository\ProjectRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProjectRepository::class)]
class Project
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
    #[ORM\Column(length: 500)]
    private ?string $description = null;

    /**
     * @var int|null
     */
    #[ORM\Column]
    private ?int $year = null;

    /**
     * @var string|null
     */
    #[ORM\Column(length: 255)]
    private ?string $photoUrl = null;

    /**
     * @var string|null
     */
    #[ORM\Column(length: 255)]
    private ?string $videoUrl = null;

    /**
     * @var string|null
     */
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $previewVideoUrl = null;

    /**
     * @param string|null $title
     * @param string|null $description
     * @param int|null $year
     * @param string|null $photoUrl
     * @param string|null $videoUrl
     * @param string|null $previewVideoUrl
     */
    public function __construct
    (
        ?string $title,
        ?string $description,
        ?int $year,
        ?string $photoUrl,
        ?string $videoUrl,
        ?string $previewVideoUrl = null
    )
    {
        $this->title = $title;
        $this->description = $description;
        $this->year = $year;
        $this->photoUrl = $photoUrl;
        $this->videoUrl = $videoUrl;
        $this->previewVideoUrl = $previewVideoUrl;
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
     * @return int|null
     */
    public function getYear(): ?int
    {
        return $this->year;
    }

    /**
     * @param int $year
     * @return $this
     */
    public function setYear(int $year): self
    {
        $this->year = $year;

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
     * @param string $photo_url
     * @return $this
     */
    public function setPhotoUrl(string $photoUrl): self
    {
        $this->photoUrl = $photoUrl;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getVideoUrl(): ?string
    {
        return $this->videoUrl;
    }

    /**
     * @param string $videoUrl
     * @return $this
     */
    public function setVideoUrl(string $videoUrl): self
    {
        $this->videoUrl = $videoUrl;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPreviewVideoUrl(): ?string
    {
        return $this->previewVideoUrl;
    }

    /**
     * @param string|null $previewVideoUrl
     * @return $this
     */
    public function setPreviewVideoUrl(?string $previewVideoUrl): self
    {
        $this->previewVideoUrl = $previewVideoUrl;

        return $this;
    }
}
