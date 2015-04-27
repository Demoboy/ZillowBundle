<?php

/**
 * This file is part of the KMJZillowBundle
 * @copyright (c) 2014, Kaelin Jacobson
 * @category Types
 */

namespace KMJ\ZillowBundle\Type;

use KMJ\ZillowBundle\Interfaces\XmlMapper;

/**
 * Defines the Zillow Property Links type
 *
 * @author Kaelin Jacobson <kaelinjacobson@gmail.com>
 */
class DemographicLinks implements XmlMapper {

    use \KMJ\ZillowBundle\Traits\PropertyAutoMapper;

    /**
     * URL for main page
     *
     * @var string
     */
    protected $main;

    /**
     * URL for affordability page
     *
     * @var string
     */
    protected $affordability;

    /**
     * URL for homes and real estate page
     *
     * @var string
     */
    protected $homesAndRealEstate;

    /**
     * URL for people page
     *
     * @var string
     */
    protected $people;

    /**
     * URL for for sale page
     *
     * @var string
     */
    protected $forSale;

    /**
     * URL for for sale by owner page
     *
     * @var string
     */
    protected $forSaleByOwner;

    /**
     * URL for foreclosures page
     *
     * @var string
     */
    protected $foreclosures;

    /**
     * URL for recently sold page
     *
     * @var string
     */
    protected $recentlySold;

    /**
     * Get the value of URL for main page
     *
     * @return string
     */
    public function getMain() {
        return $this->main;
    }

    /**
     * Get the value of URL for affordability page
     *
     * @return string
     */
    public function getAffordability() {
        return $this->affordability;
    }

    /**
     * Get the value of URL for homes and real estate page
     *
     * @return string
     */
    public function getHomesAndRealEstate() {
        return $this->homesAndRealEstate;
    }

    /**
     * Get the value of URL for people page
     *
     * @return string
     */
    public function getPeople() {
        return $this->people;
    }

    /**
     * Get the value of URL for for sale page
     *
     * @return string
     */
    public function getForSale() {
        return $this->forSale;
    }

    /**
     * Get the value of URL for for sale by owner page
     *
     * @return string
     */
    public function getForSaleByOwner() {
        return $this->forSaleByOwner;
    }

    /**
     * Get the value of URL for foreclosures page
     *
     * @return string
     */
    public function getForeclosures() {
        return $this->foreclosures;
    }

    /**
     * Get the value of URL for recently sold page
     *
     * @return string
     */
    public function getRecentlySold() {
        return $this->recentlySold;
    }

}
