<?php

namespace Scraper\ScraperTrustpilot\Entity;

class BusinessUnit
{
    public string $id;
    public string $status;
    public string $identifyingName;
    public string $displayName;
    public BusinessUnitName $name;
    /** @var array<Link> */
    public array $links;
    public string $country;
    public string $websiteUrl;
    public NumberOfReviews $numberOfReviews;
    public Score $score;

    public function setName(BusinessUnitName $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function addLink(Link $link): self
    {
        $this->links[] = $link;

        return $this;
    }

    public function setNumberOfReviews(NumberOfReviews $numberOfReviews): self
    {
        $this->numberOfReviews = $numberOfReviews;

        return $this;
    }

    public function setScore(Score $score): self
    {
        $this->score = $score;

        return $this;
    }
}
