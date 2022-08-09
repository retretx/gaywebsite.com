<?php

namespace App\Entity;

use App\Repository\OurClientRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OurClientRepository::class)]
class OurClient
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
    private ?string $logo = null;

    /**
     * @param string|null $logo
     */
    public function __construct
    (
        ?string $logo,
    )
    {
        $this->logo = $logo;
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
    public function getLogo(): ?string
    {
        return $this->logo;
    }

    /**
     * @param string $logo
     * @return $this
     */
    public function setLogo(string $logo): self
    {
        $this->logo = $logo;

        return $this;
    }
}
