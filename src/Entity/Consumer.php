<?php

namespace Scraper\ScraperTrustpilot\Entity;

class Consumer
{
    public string $id;
    public string $displayName;
    public ?string $displayLocation;
    public int $numberOfReviews;
    /** @var array<Link> */
    public array $links;

    public function addLink(Link $link): self
    {
        $this->links[] = $link;

        return $this;
    }
}
