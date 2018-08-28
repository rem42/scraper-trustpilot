<?php

namespace Scraper\ScraperTrustpilot\Api;

use JMS\Serializer\SerializerBuilder;
use Scraper\ScraperTrustpilot\Request\TrustpilotBusinessUnitsReviewsRequest;

class TrustpilotBusinessUnitsReviewsApi extends TrustpilotApi
{
	/**
	 * @var TrustpilotBusinessUnitsReviewsRequest
	 */
	protected $request;

	public function execute()
	{
		$data         = $this->data["reviews"];
		$reviews      = json_encode($data);
		$serializer   = SerializerBuilder::create()->build();
		$this->object = $serializer->deserialize($reviews, "ArrayCollection<Scraper\ScraperTrustpilot\Entity\Review>", 'json');

		return $this->object;
	}
}
