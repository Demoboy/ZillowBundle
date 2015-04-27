<?php

/**
 * This file is part of the KMJZillowBundle
 * @copyright (c) 2014, Kaelin Jacobson
 * @category Requests
 */

namespace KMJ\ZillowBundle\Request;

use KMJ\ZillowBundle\Response\ChartResponse;
use SimpleXMLElement;

/**
 * The GetChart API generates a URL for an image file that displays historical
 * Zestimates for a specific property. The API accepts as input the Zillow
 * Property ID as well as a chart type: either percentage or dollar value change.
 * Optionally, the API accepts width and height parameters that constrain the
 * size of the image. The historical data can be for the past 1 year, 5 years
 * or 10 years.
 *
 * @author Kaelin Jacobson <kaelinjacobson@gmail.com>
 * @link http://www.zillow.com/howto/api/GetChart.htm Zillow API Documentation
 */
class ChartRequest extends BasicChart {

    /**
     * The URL to use when performing the request
     */
    const URL = "http://www.zillow.com/webservice/GetChart.htm";

    /**
     * The Zillow Property ID for the property
     *
     * @var string
     */
    protected $zpid;

    /**
     * {@inheritdoc}
     *
     * @param SimpleXMLElement $xml The XML from the request.
     */
    protected function handleResponse(SimpleXMLElement $xml) {
        return new ChartResponse($xml->response->children());
    }

    /**
     * {@inheritdoc}
     * @codeCoverageIgnore
     */
    public function __construct() {
        parent::__construct(self::URL);
    }

    /**
     * {@inheritdoc}
     *
     * @param string $propertyName The property name to translate
     */
    protected function translateKey($propertyName) {
        switch ($propertyName) {
            case "unitType":
                return "unit-type";
        }

        return null;
    }

    /**
     * Get the value of The Zillow Property ID for the property
     * 
     * @codeCoverageIgnore
     * @return string
     */
    public function getZpid() {
        return $this->zpid;
    }

    /**
     * Set the value of The Zillow Property ID for the property
     * 
     * @codeCoverageIgnore
     * @param string $value The Zillow Property ID for the property
     *
     * @return self
     */
    public function setZpid($value) {
        $this->zpid = $value;

        return $this;
    }

}
