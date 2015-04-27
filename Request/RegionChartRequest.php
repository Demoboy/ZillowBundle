<?php

/**
 * This file is part of the KMJZillowBundle
 * @copyright (c) 2014, Kaelin Jacobson
 * @category Requests
 */

namespace KMJ\ZillowBundle\Request;

use KMJ\ZillowBundle\Response\RegionChartResponse;
use SimpleXMLElement;

/**
 * The GetRegionChart API generates a URL for an image file that displays the
 * historical Zestimates for a specific geographic region. The API accepts as
 * input the name of the region as well as a chart type: either percentage or
 * dollar value change. Optionally, the API accepts width and height parameters
 * that constrain the size of the image. The historical data can be for the
 * past 1 year, 5 years or 10 years.
 *
 * @author Kaelin Jacobson <kaelinjacobson@gmail.com>
 * @link http://www.zillow.com/howto/api/GetRegionChart.htm Zillow API Documentation
 */
class RegionChartRequest extends BasicChart {

    /**
     * The URL to use when performing the request
     */
    const URL = "http://www.zillow.com/webservice/GetRegionChart.htm";

    /**
     * The name of a city
     *
     * @var string
     */
    protected $city;

    /**
     * The two-letter abbreviation for a state
     *
     * @var string
     */
    protected $state;

    /**
     * The name of the neighborhood
     *
     * @var string
     */
    protected $neighborhood;

    /**
     * The 5-digit ZIP code
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
        return new RegionChartResponse($xml->response->children());
    }

    /**
     * {@inheritdoc}
     * @codeCoverageIgnore
     */
    public function __construct() {
        parent::__construct(self::URL);
    }

    /**
     * Get the value of The name of a city
     *
     * @return string
     */
    public function getCity() {
        return $this->city;
    }

    /**
     * Set the value of The name of a city
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
     * Get the value of The two-letter abbreviation for a state
     *
     * @return string
     */
    public function getState() {
        return $this->state;
    }

    /**
     * Set the value of The two-letter abbreviation for a state
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
     * Get the value of The name of the neighborhood
     *
     * @return string
     */
    public function getNeighborhood() {
        return $this->neighborhood;
    }

    /**
     * Set the value of The name of the neighborhood
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
     * Get the value of The 5-digit ZIP code
     *
     * @return string
     */
    public function getZip() {
        return $this->zip;
    }

    /**
     * Set the value of The 5-digit ZIP code
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
