<?php

/**
 * This file is part of the KMJZillowBundle
 * @copyright (c) 2014, Kaelin Jacobson
 * @category Responses
 */

namespace KMJ\ZillowBundle\Response;

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
class DeepSearchResponse extends Response {

    use \KMJ\ZillowBundle\Traits\AdvancedPropertyResult;

    /**
     * The FIPS county code is a five-digit Federal Information Processing Standard
     * (FIPS) code (FIPS 6-4) which uniquely identifies counties and county
     * equivalents in the United States, certain U.S. possessions, and certain
     * freely associated states. The first two digits are the FIPS state code
     * and the last three are the county code within the state or possession.
     *
     * @var string
     */
    protected $fipsCounty;

    /**
     * {@inheritdoc}
     *
     * @param SimpleXMLElement $xml The XML to load
     */
    public function __construct(SimpleXMLElement $xml) {
        $this->init();
        parent::__construct($xml);
    }

    /**
     * Get the value of Fips County
     *
     * @return string The FIPS county code is a five-digit Federal Information Processing Standard (FIPS) code (FIPS 6-4) which uniquely identifies counties and county equivalents in the United States, certain U.S. possessions, and certain freely associated states. The first two digits are the FIPS state code and the last three are the county code within the state or possession.
     */
    public function getFipsCounty() {
        return $this->fipsCounty;
    }

}
