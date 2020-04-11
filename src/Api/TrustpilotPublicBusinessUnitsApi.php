<?php

namespace Scraper\ScraperTrustpilot\Api;

use Scraper\Scraper\Api\AbstractApi;
use Scraper\ScraperTrustpilot\Entity\BusinessUnit;

class TrustpilotPublicBusinessUnitsApi extends AbstractApi
{
    public function execute(): BusinessUnit
    {
        $content = $this->response->getContent();

        /** @var BusinessUnit $object */
        $object = $this->serializer->deserialize($content, BusinessUnit::class, 'json');

        return $object;
    }
}
