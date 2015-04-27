<?php

/**
 * This file is part of the KMJZillowBundle
 * @copyright (c) 2014, Kaelin Jacobson
 * @category Requests
 */

namespace KMJ\ZillowBundle\Request;

use KMJ\ZillowBundle\Response\UpdatedPropertyDetailsResponse;
use SimpleXMLElement;

/**
 * For a specified property, the GetUpdatedPropertyDetails API returns all of 
 * the home facts that have been edited by the home's owner or agent. 
 * The result set contains the following attributes:
 *       Property address
 *       Zillow property identifier
 *       Posting details such as the agent name, MLS number, price, and posting type (For Sale or Make Me Move ™)
 *       Up to five photos of the property
 *       Updated home facts such as beds, baths, square footage, home description, and neighborhood and school names
 *
 * @author Kaelin Jacobson <kaelinjacobson@gmail.com>
 * @link http://www.zillow.com/howto/api/GetChart.htm Zillow API Documentation
 */
class UpdatedPropertyDetailsRequest extends Request {

    /**
     * The URL to use when performing the request
     */
    const URL = "http://www.zillow.com/webservice/GetUpdatedPropertyDetails.htm";

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
        return new UpdatedPropertyDetailsResponse($xml->response->children());
    }

    /**
     * {@inheritdoc}
     * 
     * @codeCoverageIgnore
     */
    public function __construct() {
        parent::__construct(self::URL);
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
