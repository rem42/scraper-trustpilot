<?php

namespace Scraper\ScraperTrustpilot\Entity;

use JMS\Serializer\Annotation as Serializer;

class Link
{
	/**
	 * @var string
	 * @Serializer\Type("string")
	 */
	protected $href;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 */
	protected $method;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 */
	protected $rel;

	/**
	 * @return string
	 */
	public function getHref()
	{
		return $this->href;
	}

	/**
	 * @param string $href
	 */
	public function setHref($href)
	{
		$this->href = $href;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getMethod()
	{
		return $this->method;
	}

	/**
	 * @param string $method
	 */
	public function setMethod($method)
	{
		$this->method = $method;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getRel()
	{
		return $this->rel;
	}

	/**
	 * @param string $rel
	 */
	public function setRel($rel)
	{
		$this->rel = $rel;
		return $this;
	}
}