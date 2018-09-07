<?php

namespace Scraper\ScraperTrustpilot\Request;

use Scraper\Scraper\Annotation\UrlAnnotation;

/**
 * Class TrustpilotBusinessUnitsReviewsRequest
 * @package Scraper\ScraperTrustpilot\Request
 *
 * @UrlAnnotation(url="business-units/{idBusinessUnit}", method="GET", contentType="JSON", protocol="CURL")
 */
class TrustpilotPublicBusinessUnitsRequest extends TrustpilotRequest
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
	 * @param $idBusinessUnit
	 *
	 * @return $this
	 */
	public function setIdBusinessUnit($idBusinessUnit)
	{
		$this->idBusinessUnit = $idBusinessUnit;
		return $this;
	}
}
