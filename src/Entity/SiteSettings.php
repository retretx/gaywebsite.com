<?php

namespace App\Entity;

use App\Repository\SiteSettingsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SiteSettingsRepository::class)]
class SiteSettings
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
    private ?string $contactPhoneNumber = null;

    /**
     * @var string|null
     */
    #[ORM\Column(length: 255)]
    private ?string $contactEmail = null;

    /**
     * @var string|null
     */
    #[ORM\Column(length: 255)]
    private ?string $companyAddress = null;

    /**
     * @var array|null
     */
    #[ORM\Column(type: 'json')]
    private ?array $socialLinks = null;

    /**
     * @param int|null $id
     * @param string|null $contactPhoneNumber
     * @param string|null $contactEmail
     * @param string|null $companyAddress
     * @param array|null $socialLinks
     */
    public function __construct
    (
        ?int $id,
        ?string $contactPhoneNumber,
        ?string $contactEmail,
        ?string $companyAddress,
        ?array $socialLinks
    )
    {
        $this->id = $id;
        $this->contactPhoneNumber = $contactPhoneNumber;
        $this->contactEmail = $contactEmail;
        $this->companyAddress = $companyAddress;
        $this->socialLinks = $socialLinks;
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
    public function getContactPhoneNumber(): ?string
    {
        return $this->contactPhoneNumber;
    }

    /**
     * @param string $contactPhoneNumber
     * @return $this
     */
    public function setContactPhoneNumber(string $contactPhoneNumber): self
    {
        $this->contactPhoneNumber = $contactPhoneNumber;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getContactEmail(): ?string
    {
        return $this->contactEmail;
    }

    /**
     * @param string $contactEmail
     * @return $this
     */
    public function setContactEmail(string $contactEmail): self
    {
        $this->contactEmail = $contactEmail;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCompanyAddress(): ?string
    {
        return $this->companyAddress;
    }

    /**
     * @param string $companyAddress
     * @return $this
     */
    public function setCompanyAddress(string $companyAddress): self
    {
        $this->companyAddress = $companyAddress;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getSocialLinks(): ?array
    {
        return $this->socialLinks;
    }

    /**
     * @param array|null $socialLinks
     */
    public function setSocialLinks(?array $socialLinks): void
    {
        $this->socialLinks = $socialLinks;
    }
}
