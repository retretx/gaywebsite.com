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
    private ?string $credential = null;

    /**
     * @var string|null
     */
    #[ORM\Column(length: 255)]
    private ?string $photo_url = null;

    /**
     * @var string|null
     */
    #[ORM\Column(length: 255)]
    private ?string $video_url = null;

    /**
     * @var string|null
     */
    #[ORM\Column(length: 255)]
    private ?string $preview_video_url = null;

    /**
     * @param int|null $id
     * @param string|null $title
     * @param string|null $description
     * @param int|null $year
     * @param string|null $credential
     * @param string|null $photo_url
     * @param string|null $video_url
     * @param string|null $preview_video_url
     */
    public function __construct
    (
        ?int $id,
        ?string $title,
        ?string $description,
        ?int $year,
        ?string $credential,
        ?string $photo_url,
        ?string $video_url,
        ?string $preview_video_url
    )
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->year = $year;
        $this->credential = $credential;
        $this->photo_url = $photo_url;
        $this->video_url = $video_url;
        $this->preview_video_url = $preview_video_url;
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
    public function getCredential(): ?string
    {
        return $this->credential;
    }

    /**
     * @param string $credential
     * @return $this
     */
    public function setCredential(string $credential): self
    {
        $this->credential = $credential;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPhotoUrl(): ?string
    {
        return $this->photo_url;
    }

    /**
     * @param string $photo_url
     * @return $this
     */
    public function setPhotoUrl(string $photo_url): self
    {
        $this->photo_url = $photo_url;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getVideoUrl(): ?string
    {
        return $this->video_url;
    }

    /**
     * @param string $video_url
     * @return $this
     */
    public function setVideoUrl(string $video_url): self
    {
        $this->video_url = $video_url;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPreviewVideoUrl(): ?string
    {
        return $this->preview_video_url;
    }

    /**
     * @param string $preview_video_url
     * @return $this
     */
    public function setPreviewVideoUrl(string $preview_video_url): self
    {
        $this->preview_video_url = $preview_video_url;

        return $this;
    }
}
