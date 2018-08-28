<?php

namespace Scraper\ScraperTrustpilot\Api;

use JMS\Serializer\SerializerBuilder;
use Scraper\ScraperTrustpilot\Entity\BusinessUnit;
use Scraper\ScraperTrustpilot\Request\TrustpilotPublicBusinessUnitsRequest;

class TrustpilotPublicBusinessUnitsApi extends TrustpilotApi
{
	/**
	 * @var TrustpilotPublicBusinessUnitsRequest
	 */
	protected $request;

	public function execute()
	{
		$public       = json_encode($this->data);
		$serializer   = SerializerBuilder::create()->build();
		$this->object = $serializer->deserialize($public, BusinessUnit::class, 'json');

		return $this->object;
	}
}
