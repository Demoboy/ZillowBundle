<?php

/**
 * This file is part of the KMJZillowBundle
 * @copyright (c) 2014, Kaelin Jacobson
 * @category Requests
 */

namespace KMJ\ZillowBundle\Request;

use KMJ\ZillowBundle\Response\DeepSearchResponse;
use KMJ\ZillowBundle\Response\SearchResultsResponse;
use SimpleXMLElement;

/**
 * The GetSearchResults API finds a property for a specified address. The content
 * returned contains the address for the property or properties as well as the
 * Zillow Property ID (ZPID) and current Zestimate®. It also includes the date
 * the Zestimate was computed, a valuation range and the Zestimate ranking for
 * the property within its ZIP code.
 *
 * @author Kaelin Jacobson <kaelinjacobson@gmail.com>
 * @link http://www.zillow.com/howto/api/GetSearchResults.htm Zillow API Documentation
 */
class SearchResultsRequest extends Request {

    /**
     * @var string The URL to make the request to
     */
    const URL = "http://www.zillow.com/webservice/GetSearchResults.htm";

    /**
     *
     * @var string The address of the property to search. This string should be URL encoded.
     */
    private $address;

    /**
     *
     * @var string The city+state combination and/or ZIP code for which to search. This string should be URL encoded. Note that giving both city and state is required
     */
    private $cityStateZip;

    /**
     *
     * @var boolean Return Rent Zestimate information if available
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
        $responses = array();
        $result = (array) $xml->response->results;

        if (is_array($result['result'])) {
            foreach ($result['result'] as $r) {
                $responses[] = new SearchResultsResponse($r->children());
            }
        } else {
            $responses[] = new SearchResultsResponse($result['result']);
        }

        dump($responses);
        
        return $responses;
    }

    /**
     * Get the value of Address
     *
     * @return string The address of the property to search. This string should be URL encoded.
     */
    public function getAddress() {
        return $this->address;
    }

    /**
     * Set the value of Address
     *
     * @param string $value The address of the property to search. This string should be URL encoded. address
     *
     * @return self
     */
    public function setAddress($value) {
        $this->address = $value;

        return $this;
    }

    /**
     * Get the value of City State Zip
     *
     * @return string The city+state combination and/or ZIP code for which to search. This string should be URL encoded. Note that giving both city and state is required
     */
    public function getCityStateZip() {
        return $this->cityStateZip;
    }

    /**
     * Set the value of City State Zip
     *
     * @param string $value The city+state combination and/or ZIP code for which to search. This string should be URL encoded. Note that giving both city and state is required cityStateZip
     *
     * @return self
     */
    public function setCityStateZip($value) {
        $this->cityStateZip = $value;

        return $this;
    }

    /**
     * Get the value of Rent Zestimate
     *
     * @return boolean Return Rent Zestimate information if available
     */
    public function getRentZestimate() {
        return $this->rentZestimate;
    }

    /**
     * Set the value of Rent Zestimate
     *
     * @param boolean $value Return Rent Zestimate information if available rentZestimate
     *
     * @return self
     */
    public function setRentZestimate($value) {
        $this->rentZestimate = $value;

        return $this;
    }

}
