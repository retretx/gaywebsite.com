<?php

namespace App\Entity;

use App\Repository\ProjectRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProjectRepository::class)]
class Project
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(length: 500)]
    private ?string $description = null;

    #[ORM\Column]
    private ?int $year = null;

    #[ORM\Column(length: 255)]
    private ?string $credential = null;

    #[ORM\Column(length: 255)]
    private ?string $photo_url = null;

    #[ORM\Column(length: 255)]
    private ?string $video_url = null;

    #[ORM\Column(length: 255)]
    private ?string $preview_video_url = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function setYear(int $year): self
    {
        $this->year = $year;

        return $this;
    }

    public function getCredential(): ?string
    {
        return $this->credential;
    }

    public function setCredential(string $credential): self
    {
        $this->credential = $credential;

        return $this;
    }

    public function getPhotoUrl(): ?string
    {
        return $this->photo_url;
    }

    public function setPhotoUrl(string $photo_url): self
    {
        $this->photo_url = $photo_url;

        return $this;
    }

    public function getVideoUrl(): ?string
    {
        return $this->video_url;
    }

    public function setVideoUrl(string $video_url): self
    {
        $this->video_url = $video_url;

        return $this;
    }

    public function getPreviewVideoUrl(): ?string
    {
        return $this->preview_video_url;
    }

    public function setPreviewVideoUrl(string $preview_video_url): self
    {
        $this->preview_video_url = $preview_video_url;

        return $this;
    }
}
