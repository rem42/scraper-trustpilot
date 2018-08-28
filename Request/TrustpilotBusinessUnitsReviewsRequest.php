<?php

namespace Scraper\ScraperTrustpilot\Request;

use Scraper\Scraper\Annotation\UrlAnnotation;

/**
 * Class TrustpilotBusinessUnitsReviewsRequest
 * @package Scraper\ScraperTrustpilot\Request
 *
 * @UrlAnnotation(url="business-units/{idBusinessUnit}/reviews", method="GET", contentType="JSON", protocol="CURL")
 */
class TrustpilotBusinessUnitsReviewsRequest extends TrustpilotRequest
{
	protected $idBusinessUnit;

	/**
	 * @return mixed
	 */
	public function getIdBusinessUnit()
	{
		return $this->idBusinessUnit;
	}

	/**
	 * @param mixed $idBusinessUnit
	 */
	public function setIdBusinessUnit($idBusinessUnit)
	{
		$this->idBusinessUnit = $idBusinessUnit;
		return $this;
	}
}
