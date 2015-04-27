<?php

/**
 * This file is part of the KMJZillowBundle
 * @copyright (c) 2014, Kaelin Jacobson
 * @category Requests
 */

namespace KMJ\ZillowBundle\Request;

use KMJ\ZillowBundle\Response\DeepCompsResponse;
use SimpleXMLElement;

/**
 * The GetDeepComps API returns a list of comparable recent sales for a specified
 * property. The result set returned contains the address, Zillow property
 * identifier, and Zestimate for the comparable properties and the principal
 * property for which the comparables are being retrieved. This API call
 * also returns rich property data for the comparables.
 *
 * @author Kaelin Jacobson <kaelinjacobson@gmail.com>
 * @link http://www.zillow.com/howto/api/GetDeepComps.htm Zillow API Documentation
 */
class DeepCompsRequest extends Request {

    /**
     * The URL to use when performing the request
     */
    const URL = "http://www.zillow.com/webservice/GetDeepComps.htm";

    /**
     * The Zillow Property ID for the property
     *
     * @var string
     */
    protected $zpid;

    /**
     * The number of comparable recent sales to obtain (integer between 1 and 25)
     *
     * @var integer
     */
    protected $count;

    /**
     * Return Rent Zestimate information if available
     *
     * @var boolean
     */
    private $rentZestimate;

    /**
     * {@inheritdoc}
     *
     * @param SimpleXMLElement $xml The XML from the request.
     */
    protected function handleResponse(SimpleXMLElement $xml) {
        return new DeepCompsResponse($xml->response->properties->children());
    }

    /**
     * {@inheritdoc}
     */
    public function __construct() {
        parent::__construct(self::URL);
    }

    /**
     * Get the value of The Zillow Property ID for the property
     *
     * @return string
     */
    public function getZpid() {
        return $this->zpid;
    }

    /**
     * Set the value of The Zillow Property ID for the property
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
     * Get the value of The number of comparable recent sales to obtain (integer between 1 and 25)
     *
     * @return integer
     */
    public function getCount() {
        return $this->count;
    }

    /**
     * Set the value of The number of comparable recent sales to obtain (integer between 1 and 25)
     *
     * @param integer $value count
     *
     * @return self
     */
    public function setCount($value) {
        $this->count = $value;

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
