<?php

namespace Scraper\ScraperTrustpilot\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class Review
{
	/**
	 * @var string
	 * @Serializer\Type("string")
	 */
	protected $id;
	/**
	 * @var int
	 * @Serializer\Type("int")
	 */
	protected $stars;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 */
	protected $title;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 */
	protected $text;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 */
	protected $language;
	/**
	 * @var \DateTime
	 * @Serializer\Type("DateTime")
	 * @Serializer\SerializedName("createdAt")
	 */
	protected $createdAt;
	/**
	 * @var \DateTime
	 * @Serializer\Type("DateTime")
	 * @Serializer\SerializedName("updatedAt")
	 */
	protected $updatedAt;
	/**
	 * @var boolean
	 * @Serializer\Type("boolean")
	 * @Serializer\SerializedName("isVerified")
	 */
	protected $isVerified;
	/**
	 * @var int
	 * @Serializer\Type("int")
	 * @Serializer\SerializedName("numberOfLikes")
	 */
	protected $numberOfLikes;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 */
	protected $status;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("reportData")
	 */
	protected $reportData;
	/**
	 * @var boolean
	 * @Serializer\Type("boolean")
	 * @Serializer\SerializedName("countsTowardsTrustScore")
	 */
	protected $countsTowardsTrustScore;
	/**
	 * @var ArrayCollection|Link
	 * @Serializer\Type("ArrayCollection<Scraper\ScraperTrustpilot\Entity\Link>")
	 */
	protected $links;
	/**
	 * @var Consumer
	 * @Serializer\Type("Scraper\ScraperTrustpilot\Entity\Consumer")
	 */
	protected $consumer;
	/**
	 * @var BusinessUnit
	 * @Serializer\Type("Scraper\ScraperTrustpilot\Entity\BusinessUnit")
	 * @Serializer\SerializedName("businessUnit")
	 */
	protected $businessUnit;
	/**
	 * @var CompanyReply
	 * @Serializer\Type("Scraper\ScraperTrustpilot\Entity\CompanyReply")
	 * @Serializer\SerializedName("companyReply")
	 */
	protected $companyReply;

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
	 * @return string
	 */
	public function getTitle()
	{
		return $this->title;
	}

	/**
	 * @param string $title
	 */
	public function setTitle($title)
	{
		$this->title = $title;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getText()
	{
		return $this->text;
	}

	/**
	 * @param string $text
	 */
	public function setText($text)
	{
		$this->text = $text;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getLanguage()
	{
		return $this->language;
	}

	/**
	 * @param string $language
	 */
	public function setLanguage($language)
	{
		$this->language = $language;
		return $this;
	}

	/**
	 * @return \DateTime
	 */
	public function getCreatedAt()
	{
		return $this->createdAt;
	}

	/**
	 * @param \DateTime $createdAt
	 */
	public function setCreatedAt($createdAt)
	{
		$this->createdAt = $createdAt;
		return $this;
	}

	/**
	 * @return \DateTime
	 */
	public function getUpdatedAt()
	{
		return $this->updatedAt;
	}

	/**
	 * @param \DateTime $updatedAt
	 */
	public function setUpdatedAt($updatedAt)
	{
		$this->updatedAt = $updatedAt;
		return $this;
	}

	/**
	 * @return bool
	 */
	public function isVerified()
	{
		return $this->isVerified;
	}

	/**
	 * @param bool $isVerified
	 */
	public function setIsVerified($isVerified)
	{
		$this->isVerified = $isVerified;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getNumberOfLikes()
	{
		return $this->numberOfLikes;
	}

	/**
	 * @param int $numberOfLikes
	 */
	public function setNumberOfLikes($numberOfLikes)
	{
		$this->numberOfLikes = $numberOfLikes;
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
	public function getReportData()
	{
		return $this->reportData;
	}

	/**
	 * @param string $reportData
	 */
	public function setReportData($reportData)
	{
		$this->reportData = $reportData;
		return $this;
	}

	/**
	 * @return bool
	 */
	public function isCountsTowardsTrustScore()
	{
		return $this->countsTowardsTrustScore;
	}

	/**
	 * @param bool $countsTowardsTrustScore
	 */
	public function setCountsTowardsTrustScore($countsTowardsTrustScore)
	{
		$this->countsTowardsTrustScore = $countsTowardsTrustScore;
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
	 * @return Consumer
	 */
	public function getConsumer()
	{
		return $this->consumer;
	}

	/**
	 * @param Consumer $consumer
	 */
	public function setConsumer($consumer)
	{
		$this->consumer = $consumer;
		return $this;
	}

	/**
	 * @return BusinessUnit
	 */
	public function getBusinessUnit()
	{
		return $this->businessUnit;
	}

	/**
	 * @param BusinessUnit $businessUnit
	 */
	public function setBusinessUnit($businessUnit)
	{
		$this->businessUnit = $businessUnit;
		return $this;
	}

	/**
	 * @return CompanyReply
	 */
	public function getCompanyReply()
	{
		return $this->companyReply;
	}

	/**
	 * @param CompanyReply $companyReply
	 */
	public function setCompanyReply($companyReply)
	{
		$this->companyReply = $companyReply;
		return $this;
	}
}