<?php

namespace Scraper\ScraperTrustpilot\Entity;

class Review
{
    public string $id;
    public int $stars;
    public string $title;
    public string $text;
    public string $language;
    public \DateTime $createdAt;
    public ?\DateTime $updatedAt;
    public bool $isVerified;
    public int $numberOfLikes;
    public string $status;
    public ?string $reportData;
    /** @var array<string> */
    public array $complianceLabels;
    public bool $countsTowardsTrustScore;
    public ?bool $countsTowardsLocationTrustScore;
    /** @var array<Link> */
    public array $links;
    public Consumer $consumer;
    public BusinessUnit $businessUnit;
    public CompanyReply $companyReply;

    public function setCreatedAt(string $createdAt): self
    {
        if ($date = \DateTime::createFromFormat('Y-m-d\TH:i:s\Z', $createdAt)) {
            $this->createdAt = $date;
        }

        return $this;
    }

    public function setUpdatedAt(?string $updatedAt): self
    {
        if ($updatedAt && $date = \DateTime::createFromFormat('Y-m-d\TH:i:s\Z', $updatedAt)) {
            $this->updatedAt = $date;
        }

        return $this;
    }

    public function addLink(Link $link): self
    {
        $this->links[] = $link;

        return $this;
    }

    public function setConsumer(Consumer $consumer): self
    {
        $this->consumer = $consumer;

        return $this;
    }

    public function setBusinessUnit(BusinessUnit $businessUnit): self
    {
        $this->businessUnit = $businessUnit;

        return $this;
    }

    public function setCompanyReply(CompanyReply $companyReply): self
    {
        $this->companyReply = $companyReply;

        return $this;
    }
}
