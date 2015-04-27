<?php

/**
 * This file is part of the KMJZillowBundle
 * @copyright (c) 2014, Kaelin Jacobson
 * @category Requests
 */

namespace KMJ\ZillowBundle\Request;

use KMJ\ZillowBundle\Response\ZestimateResponse;
use SimpleXMLElement;

/**
 * For a specified Zillow property identifier (zpid), the GetZestimate API returns:
 *
 *      The most recent property Zestimate
 *      The date the Zestimate was computed
 *      The valuation range
 *      The Zestimate ranking within the property's ZIP code.
 *      The full property address and geographic location (latitude/longitude) and a set of identifiers that uniquely represent the region (ZIP code, city, county & state) in which the property exists.
 *
 * The GetZestimate API will only surface properties for which a Zestimate exists.
 * If a request is made for a property that has no Zestimate,
 * an error code is returned. Zillow doesn't have Zestimates for all the homes
 * in its database. For such properties, we do have tax assessment data,
 * but that is not provided through the API. For more information, see our Zestimate coverage.
 *
 * @author Kaelin Jacobson <kaelinjacobson@gmail.com>
 * @link http://www.zillow.com/howto/api/GetZestimate.htm Zillow API documentation
 */
class ZestimateRequest extends Request {

    /**
     * @var string The URL to use when performing the request
     */
    const URL = "http://www.zillow.com/webservice/GetZestimate.htm";

    /**
     * The Zillow Property ID for the property for which to obtain information
     *
     * @var string
     */
    private $zpid;

    /**
     * Return Rent Zestimate information if available
     *
     * @var boolean
     */
    private $rentZestimate;

    /**
     * {@inheritdoc}
     */
    public function __construct() {
        parent::__construct(self::URL);
    }

    /**
     * {@inheritdoc}
     * 
     * @param SimpleXMLElement $xml The XML from the request.
     */
    protected function handleResponse(SimpleXMLElement $xml) {
        return new ZestimateResponse($xml->response->children());
    }

    /**
     * Get the value of The Zillow Property ID for the property for which to obtain information
     *
     * @return string
     */
    public function getZpid() {
        return $this->zpid;
    }

    /**
     * Set the value of The Zillow Property ID for the property for which to obtain information
     *
     * @param string $value zpid
     *
     * @return self
     */
    public function setZpid($value) {
        $this->zpid = $value;

        return $this;
    }

    /**
     * Get the value of Return Rent Zestimate information if available
     *
     * @return boolean
     */
    public function getRentZestimate() {
        return $this->rentZestimate;
    }

    /**
     * Set the value of Return Rent Zestimate information if available
     *
     * @param boolean $value rentZestimate
     *
     * @return self
     */
    public function setRentZestimate($value) {
        $this->rentZestimate = $value;

        return $this;
    }

}
