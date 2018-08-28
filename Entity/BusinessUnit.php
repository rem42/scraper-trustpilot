<?php

namespace Scraper\ScraperTrustpilot\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class BusinessUnit
{
	/**
	 * @var string
	 * @Serializer\Type("string")
	 */
	protected $id;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("status")
	 */
	protected $status;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("identifyingName")
	 */
	protected $identifyingName;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("displayName")
	 */
	protected $displayName;
	/**
	 * @var BusinessUnitName
	 * @Serializer\Type("Scraper\ScraperTrustpilot\Entity\BusinessUnitName")
	 * @Serializer\SerializedName("name")
	 */
	protected $name;
	/**
	 * @var ArrayCollection|Link
	 * @Serializer\Type("ArrayCollection<Scraper\ScraperTrustpilot\Entity\Link>")
	 */
	protected $links;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("country")
	 */
	protected $country;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("websiteUrl")
	 */
	protected $websiteUrl;
	/**
	 * @var NumberOfReviews
	 * @Serializer\Type("Scraper\ScraperTrustpilot\Entity\NumberOfReviews")
	 * @Serializer\SerializedName("numberOfReviews")
	 */
	protected $numberOfReviews;
	/**
	 * @var int
	 * @Serializer\Type("int")
	 * @Serializer\SerializedName("stars")
	 */
	protected $stars;
	/**
	 * @var float
	 * @Serializer\Type("float")
	 * @Serializer\SerializedName("trustScore")
	 */
	protected $trustScore;

	/**
	 * @return string
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param string $id
	 */
	public function setId($id)
	{
		$this->id = $id;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getStatus()
	{
		return $this->status;
	}

	/**
	 * @param string $status
	 */
	public function setStatus($status)
	{
		$this->status = $status;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getIdentifyingName()
	{
		return $this->identifyingName;
	}

	/**
	 * @param string $identifyingName
	 */
	public function setIdentifyingName($identifyingName)
	{
		$this->identifyingName = $identifyingName;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getDisplayName()
	{
		return $this->displayName;
	}

	/**
	 * @param string $displayName
	 */
	public function setDisplayName($displayName)
	{
		$this->displayName = $displayName;
		return $this;
	}

	/**
	 * @return BusinessUnitName
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @param BusinessUnitName $name
	 */
	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}

	/**
	 * @return ArrayCollection|Link
	 */
	public function getLinks()
	{
		return $this->links;
	}

	/**
	 * @param ArrayCollection|Link $links
	 */
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCountry()
	{
		return $this->country;
	}

	/**
	 * @param string $country
	 */
	public function setCountry($country)
	{
		$this->country = $country;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getWebsiteUrl()
	{
		return $this->websiteUrl;
	}

	/**
	 * @param string $websiteUrl
	 */
	public function setWebsiteUrl($websiteUrl)
	{
		$this->websiteUrl = $websiteUrl;
		return $this;
	}

	/**
	 * @return BusinessUnitName
	 */
	public function getNumberOfReviews()
	{
		return $this->numberOfReviews;
	}

	/**
	 * @param BusinessUnitName $numberOfReviews
	 */
	public function setNumberOfReviews($numberOfReviews)
	{
		$this->numberOfReviews = $numberOfReviews;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getStars()
	{
		return $this->stars;
	}

	/**
	 * @param int $stars
	 */
	public function setStars($stars)
	{
		$this->stars = $stars;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getTrustScore()
	{
		return $this->trustScore;
	}

	/**
	 * @param float $trustScore
	 */
	public function setTrustScore($trustScore)
	{
		$this->trustScore = $trustScore;
		return $this;
	}
}