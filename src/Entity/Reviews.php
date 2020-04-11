<?php

namespace Scraper\ScraperTrustpilot\Entity;

class Reviews
{
    /** @var array<Link> */
    public array $links;
    /** @var array<Review> */
    public array $reviews;

    public function addLink(Link $link): self
    {
        $this->links[] = $link;

        return $this;
    }

    public function addReviews(Review $reviews): self
    {
        $this->reviews[] = $reviews;

        return $this;
    }
}
