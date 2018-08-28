<?php

namespace Scraper\ScraperTrustpilot\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class BusinessUnitName
{
	/**
	 * @var array
	 * @Serializer\Type("array")
	 * @Serializer\SerializedName("referring")
	 */
	protected $referring;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("identifying")
	 */
	protected $identifying;

	/**
	 * @return array
	 */
	public function getReferring()
	{
		return $this->referring;
	}

	/**
	 * @param array $referring
	 */
	public function setReferring($referring)
	{
		$this->referring = $referring;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getIdentifying()
	{
		return $this->identifying;
	}

	/**
	 * @param string $identifying
	 */
	public function setIdentifying($identifying)
	{
		$this->identifying = $identifying;
		return $this;
	}
}