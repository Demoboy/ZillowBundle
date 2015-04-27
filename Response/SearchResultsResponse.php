<?php

/**
 * This file is part of the KMJZillowBundle
 * @copyright (c) 2014, Kaelin Jacobson
 * @category Responses
 */

namespace KMJ\ZillowBundle\Response;

use DateTime;
use SimpleXMLElement;

/**
 * The GetDeepSearchResults API finds a property for a specified address. The
 * result set returned contains the full address(s), zpid and Zestimate data
 * that is provided by the GetSearchResults API. Moreover, this API call also
 * gives rich property data like lot size, year built, bath/beds, last sale
 * details etc.
 *
 * @author Kaelin Jacobson <kaelinjacobson@gmail.com>
 * @link http://www.zillow.com/howto/api/GetSearchResults.htm Zillow API Documentation
 */
class SearchResultsResponse extends Response {

    use \KMJ\ZillowBundle\Traits\BasicPropertyResult;

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
     * {@inheritdoc}
     *
     * @param string $key The key for the value
     * @param string $value The value to be formated
     */
    public function formatValue($key, $value) {
        switch ($key) {
            case "lastSoldDate":
                return new DateTime($value);
            default:
                return (string) $value;
        }
    }

}
