<?php

/**
 * This file is part of the KMJZillowBundle
 * @copyright (c) 2014, Kaelin Jacobson
 * @category Requests
 */

namespace KMJ\ZillowBundle\Request;

use KMJ\ZillowBundle\Response\DeepSearchResponse;
use SimpleXMLElement;

/**
 * The GetDeepSearchResults API finds a property for a specified address. The
 * result set returned contains the full address(s), zpid and Zestimate data
 * that is provided by the GetSearchResults API. Moreover, this API call also
 * gives rich property data like lot size, year built, bath/beds, last sale
 * details etc.
 *
 * @author Kaelin Jacobson <kaelinjacobson@gmail.com>
 * @link http://www.zillow.com/howto/api/GetDeepSearchResults.htm Zillow API Documentation
 */
class DeepSearchRequest extends Request {

    /**
     * The URL to use when performing the request
     */
    const URL = "http://www.zillow.com/webservice/GetDeepSearchResults.htm";

    /**
     * The address of the property to search.
     *
     * @var string
     */
    private $address;

    /**
     * The city+state combination and/or ZIP code for which to search. This string should be URL encoded. Note that giving both city and state is required
     *
     * @var string
     */
    private $cityStateZip;

    /**
     * Return Rent Zestimate information if available
     *
     * @var boolean
     */
    private $rentZestimate;

    /**
     * {@inheritdoc}
     * @param SimpleXMLElement $xml The XML from the request.
     */
    protected function handleResponse(SimpleXMLElement $xml) {
        $responses = array();
        $result = (array)$xml->response->results;
        
        if (is_array($result['result'])) {
            foreach ($result['result'] as $r) {
                $responses[] = new DeepSearchResponse($r->children());
            }
        } else {
            $responses[] = new DeepSearchResponse($result['result']);
        }

        return $responses;
    }

    /**
     * {@inheritdoc}
     */
    public function __construct() {
        parent::__construct(self::URL);
    }

    /**
     * Get the value of The address of the property to search.
     *
     * @return string
     */
    public function getAddress() {
        return $this->address;
    }

    /**
     * Set the value of The address of the property to search.
     *
     * @param string $value address
     *
     * @return self
     */
    public function setAddress($value) {
        $this->address = $value;

        return $this;
    }

    /**
     * Get the value of The city+state combination and/or ZIP code for which to search. This string should be URL encoded. Note that giving both city and state is required
     *
     * @return string
     */
    public function getCityStateZip() {
        return $this->cityStateZip;
    }

    /**
     * Set the value of The city+state combination and/or ZIP code for which to search. This string should be URL encoded. Note that giving both city and state is required
     *
     * @param string $value cityStateZip
     *
     * @return self
     */
    public function setCityStateZip($value) {
        $this->cityStateZip = $value;

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
