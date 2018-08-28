<?php

namespace Scraper\ScraperTrustpilot\Entity;

use JMS\Serializer\Annotation as Serializer;

class CompanyReply
{
	/**
	 * @var \DateTime
	 * @Serializer\Type("DateTime")
	 * @Serializer\SerializedName("createdAt")
	 */
	protected $createdAt;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 */
	protected $text;

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
}