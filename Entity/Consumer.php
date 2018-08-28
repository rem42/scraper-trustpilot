<?php

namespace Scraper\ScraperTrustpilot\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class Consumer
{
	/**
	 * @var string
	 * @Serializer\Type("string")
	 */
	protected $id;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("displayName")
	 */
	protected $displayName;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("displayLocation")
	 */
	protected $displayLocation;
	/**
	 * @var int
	 * @Serializer\Type("int")
	 * @Serializer\SerializedName("numberOfReviews")
	 */
	protected $numberOfReviews;
	/**
	 * @var ArrayCollection|Link
	 * @Serializer\Type("ArrayCollection<Scraper\ScraperTrustpilot\Entity\Link>")
	 */
	protected $links;

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
	 * @return string
	 */
	public function getDisplayLocation()
	{
		return $this->displayLocation;
	}

	/**
	 * @param string $displayLocation
	 */
	public function setDisplayLocation($displayLocation)
	{
		$this->displayLocation = $displayLocation;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getNumberOfReviews()
	{
		return $this->numberOfReviews;
	}

	/**
	 * @param int $numberOfReviews
	 */
	public function setNumberOfReviews($numberOfReviews)
	{
		$this->numberOfReviews = $numberOfReviews;
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
}