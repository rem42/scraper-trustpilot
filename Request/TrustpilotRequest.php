<?php

namespace Scraper\ScraperTrustpilot\Request;

use Scraper\Scraper\Annotation\UrlAnnotation;
use Scraper\Scraper\Request\Request;

/**
 * Class TrustpilotRequest
 * @package Scraper\ScraperTrustpilot\Request
 *
 * @UrlAnnotation(baseUrl="https://api.trustpilot.com/v1/")
 */
abstract class TrustpilotRequest extends Request
{
	/**
	 * @var string
	 */
	protected $apiKey;

	public function getParameters()
	{
		return [
			'apikey' => $this->apiKey
		];
	}

	public function getBody()
	{
		return [];
	}

	public function getHeaders()
	{
		return [];
	}

	/**
	 * @return string
	 */
	public function getApiKey(): ?string
	{
		return $this->apiKey;
	}

	/**
	 * @param string $apiKey
	 *
	 * @return $this
	 */
	public function setApiKey(?string $apiKey)
	{
		$this->apiKey = $apiKey;
		return $this;
	}
}
