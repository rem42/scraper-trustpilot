<?php

namespace Scraper\ScraperTrustpilot\Entity;

class CompanyReply
{
    public \DateTime $createdAt;
    public string $text;

    public function setCreatedAt(string $createdAt): self
    {
        if ($date = \DateTime::createFromFormat('Y-m-d\TH:i:s\Z', $createdAt)) {
            $this->createdAt = $date;
        }

        return $this;
    }
}
