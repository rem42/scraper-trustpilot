<?php

namespace Scraper\ScraperTrustpilot\Entity;

class NumberOfReviews
{
    public int $oneStar;
    public int $twoStars;
    public int $threeStars;
    public int $fourStars;
    public int $fiveStars;
    public int $total;
    public int $usedForTrustScoreCalculation;
}
