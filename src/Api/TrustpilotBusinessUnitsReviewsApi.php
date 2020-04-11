<?php

namespace Scraper\ScraperTrustpilot\Api;

use Scraper\Scraper\Api\AbstractApi;
use Scraper\ScraperTrustpilot\Entity\Reviews;

class TrustpilotBusinessUnitsReviewsApi extends AbstractApi
{
    public function execute(): Reviews
    {
        $content = $this->response->getContent();

        /** @var Reviews $object */
        $object = $this->serializer->deserialize($content, Reviews::class, 'json');

        return $object;
    }
}
