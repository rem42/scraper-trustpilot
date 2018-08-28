<?php

namespace Scraper\ScraperTrustpilot\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class NumberOfReviews
{
	/**
	 * @var int
	 * @Serializer\Type("int")
	 * @Serializer\SerializedName("oneStar")
	 */
	protected $oneStar;
	/**
	 * @var int
	 * @Serializer\Type("int")
	 * @Serializer\SerializedName("twoStars")
	 */
	protected $twoStars;
	/**
	 * @var int
	 * @Serializer\Type("int")
	 * @Serializer\SerializedName("threeStars")
	 */
	protected $threeStars;
	/**
	 * @var int
	 * @Serializer\Type("int")
	 * @Serializer\SerializedName("fourStars")
	 */
	protected $fourStars;
	/**
	 * @var int
	 * @Serializer\Type("int")
	 * @Serializer\SerializedName("fiveStars")
	 */
	protected $fiveStars;
	/**
	 * @var int
	 * @Serializer\Type("int")
	 * @Serializer\SerializedName("total")
	 */
	protected $total;
	/**
	 * @var int
	 * @Serializer\Type("int")
	 * @Serializer\SerializedName("usedForTrustScoreCalculation")
	 */
	protected $usedForTrustScoreCalculation;

	/**
	 * @return int
	 */
	public function getOneStar()
	{
		return $this->oneStar;
	}

	/**
	 * @param int $oneStar
	 */
	public function setOneStar($oneStar)
	{
		$this->oneStar = $oneStar;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getTwoStars()
	{
		return $this->twoStars;
	}

	/**
	 * @param int $twoStars
	 */
	public function setTwoStars($twoStars)
	{
		$this->twoStars = $twoStars;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getThreeStars()
	{
		return $this->threeStars;
	}

	/**
	 * @param int $threeStars
	 */
	public function setThreeStars($threeStars)
	{
		$this->threeStars = $threeStars;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getFourStars()
	{
		return $this->fourStars;
	}

	/**
	 * @param int $fourStars
	 */
	public function setFourStars($fourStars)
	{
		$this->fourStars = $fourStars;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getFiveStars()
	{
		return $this->fiveStars;
	}

	/**
	 * @param int $fiveStars
	 */
	public function setFiveStars($fiveStars)
	{
		$this->fiveStars = $fiveStars;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getTotal()
	{
		return $this->total;
	}

	/**
	 * @param int $total
	 */
	public function setTotal($total)
	{
		$this->total = $total;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getUsedForTrustScoreCalculation()
	{
		return $this->usedForTrustScoreCalculation;
	}

	/**
	 * @param int $usedForTrustScoreCalculation
	 */
	public function setUsedForTrustScoreCalculation($usedForTrustScoreCalculation)
	{
		$this->usedForTrustScoreCalculation = $usedForTrustScoreCalculation;
		return $this;
	}
}