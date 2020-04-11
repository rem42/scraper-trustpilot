<?php

namespace Scraper\ScraperTrustpilot\Request;

use Scraper\Scraper\Annotation\Scraper;
use Scraper\Scraper\Request\RequestQuery;
use Scraper\Scraper\Request\ScraperRequest;

/**
 * @Scraper(host="api.trustpilot.com/v1/", scheme="HTTPS", method="GET", contentType="JSON")
 */
abstract class TrustpilotRequest extends ScraperRequest implements RequestQuery
{
    protected string $apiKey;

    protected string $idBusinessUnit;

    /**
     * @return array<string, string>
     */
    public function getQuery(): array
    {
        return [
            'apikey' => $this->apiKey,
        ];
    }

    public function setApiKey(string $apiKey): self
    {
        $this->apiKey = $apiKey;
        return $this;
    }

    public function getIdBusinessUnit(): string
    {
        return $this->idBusinessUnit;
    }

    public function setIdBusinessUnit(string $idBusinessUnit): self
    {
        $this->idBusinessUnit = $idBusinessUnit;
        return $this;
    }
}
