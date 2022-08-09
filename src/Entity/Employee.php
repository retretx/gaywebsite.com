<?php

namespace App\Entity;

use App\Repository\EmployeeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EmployeeRepository::class)]
class Employee
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
    private ?string $name = null;

    /**
     * @var string|null
     */
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $bio = null;

    /**
     * @var string|null
     */
    #[ORM\Column(length: 255)]
    private ?string $position = null;

    /**
     * @var array|null
     */
    #[ORM\Column(nullable: true)]
    private array $socialLinks = [];

    /**
     * @var string|null
     */
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $avatarUrl = null;

    /**
     * @param string $name
     * @param string $position
     * @param array|null $socialLinks
     * @param string|null $bio
     * @param string|null $avatarUrl
     */
    public function __construct(
        string $name,
        string $position,
        ?array $socialLinks = [],
        ?string $bio = null,
        ?string $avatarUrl = null,
    ){
        $this->name = $name;
        $this->position = $position;
        $this->socialLinks = $socialLinks;
        $this->bio = $bio;
        $this->avatarUrl = $avatarUrl;
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
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getBio(): ?string
    {
        return $this->bio;
    }

    /**
     * @param string|null $bio
     * @return $this
     */
    public function setBio(?string $bio): self
    {
        $this->bio = $bio;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPosition(): ?string
    {
        return $this->position;
    }

    /**
     * @param string $position
     * @return $this
     */
    public function setPosition(string $position): self
    {
        $this->position = $position;

        return $this;
    }

    /**
     * @return array
     */
    public function getSocialLinks(): array
    {
        return $this->socialLinks;
    }

    /**
     * @param array|null $socialLinks
     * @return $this
     */
    public function setSocialLinks(?array $socialLinks): self
    {
        $this->socialLinks = $socialLinks;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAvatarUrl(): ?string
    {
        return $this->avatarUrl;
    }

    /**
     * @param string|null $avatarUrl
     * @return $this
     */
    public function setAvatarUrl(?string $avatarUrl): self
    {
        $this->avatarUrl = $avatarUrl;

        return $this;
    }
}
