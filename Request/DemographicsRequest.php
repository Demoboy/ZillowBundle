<?php

/**
 * This file is part of the KMJZillowBundle
 * @copyright (c) 2014, Kaelin Jacobson
 * @category Requests
 */

namespace KMJ\ZillowBundle\Request;

use KMJ\ZillowBundle\Response\DemographicsResponse;
use SimpleXMLElement;

/**
 * For a specified region, the GetDemographics API returns a set of market,
 * affordability, real estate, and demographic data, including:*
 *       Local Market Data (e.g., median list price, number of homes for sale, percent listing price reduction)
 *       Affordability data (e.g., Zillow Home Value Index, 1-Yr change, property tax, etc.)
 *       Homes and Real Estate data (e.g., percent owners & renters, median home size, average year built, etc.)
 *       People data from US Census (e.g., median household income, median age, average commute time, average household size, etc.)
 *       Who Lives Here (if available for the region)
 *       What's Unique About the People (if available for the region)
 *       A region can be specified either through its respective Region ID, its zipcode, or by providing one to three parameters: state, city, neighborhood. The neighborhood parameter can be omitted if only city data is desired.
 *
 * Note: Demographic data is only available for cities and neighborhoods. If a region does not have demographic data, it may still have local market data available.
 *
 * @author Kaelin Jacobson <kaelinjacobson@gmail.com>
 * @link http://www.zillow.com/howto/api/GetDemographics.htm Zillow API Documentation
 */
class DemographicsRequest extends Request {

    /**
     * The URL to use when performing the request
     */
    const URL = "http://www.zillow.com/webservice/GetDemographics.htm";

    /**
     * The regionid of the region to retrieve data from
     *
     * @var string
     */
    protected $regionId;

    /**
     * The state of the region to retrieve data from.
     *
     * @var string
     */
    protected $state;

    /**
     * The city of the region to retrieve data from.
     *
     * @var string
     */
    protected $city;

    /**
     * The neighborhood of the region to retrieve data from.
     *
     * @var string
     */
    protected $neighborhood;

    /**
     * The zipcode of the region to retrieve data from.
     *
     * @var string
     */
    protected $zip;

    /**
     * {@inheritdoc}
     *
     * @param SimpleXMLElement $xml The XML from the request.
     */
    protected function handleResponse(SimpleXMLElement $xml) {
        return new DemographicsResponse($xml->response->children());
    }

    /**
     * {@inheritdoc}
     * @codeCoverageIgnore
     */
    public function __construct() {
        parent::__construct(self::URL);
    }

    /**
     * Get the value of The regionid of the region to retrieve data from
     *
     * @return string
     */
    public function getRegionId() {
        return $this->regionId;
    }

    /**
     * Set the value of The regionid of the region to retrieve data from
     *
     * @param string $value regionId
     *
     * @return self
     */
    public function setRegionId($value) {
        $this->regionId = $value;

        return $this;
    }

    /**
     * Get the value of The state of the region to retrieve data from.
     *
     * @return string
     */
    public function getState() {
        return $this->state;
    }

    /**
     * Set the value of The state of the region to retrieve data from.
     *
     * @param string $value state
     *
     * @return self
     */
    public function setState($value) {
        $this->state = $value;

        return $this;
    }

    /**
     * Get the value of The city of the region to retrieve data from.
     *
     * @return string
     */
    public function getCity() {
        return $this->city;
    }

    /**
     * Set the value of The city of the region to retrieve data from.
     *
     * @param string $value city
     *
     * @return self
     */
    public function setCity($value) {
        $this->city = $value;

        return $this;
    }

    /**
     * Get the value of The neighborhood of the region to retrieve data from.
     *
     * @return string
     */
    public function getNeighborhood() {
        return $this->neighborhood;
    }

    /**
     * Set the value of The neighborhood of the region to retrieve data from.
     *
     * @param string $value neighborhood
     *
     * @return self
     */
    public function setNeighborhood($value) {
        $this->neighborhood = $value;

        return $this;
    }

    /**
     * Get the value of The zipcode of the region to retrieve data from.
     *
     * @return string
     */
    public function getZip() {
        return $this->zip;
    }

    /**
     * Set the value of The zipcode of the region to retrieve data from.
     *
     * @param string $value zip
     *
     * @return self
     */
    public function setZip($value) {
        $this->zip = $value;

        return $this;
    }

}
