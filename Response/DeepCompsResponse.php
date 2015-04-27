<?php

/**
 * This file is part of the KMJZillowBundle
 * @copyright (c) 2014, Kaelin Jacobson
 * @category Responses
 */

namespace KMJ\ZillowBundle\Response;

use KMJ\ZillowBundle\Type\AdvancedProperty;
use KMJ\ZillowBundle\Type\Comparables;
use Symfony\Component\HttpFoundation\Response;

/**
 * The GetDeepComps API returns a list of comparable recent sales for a 
 * specified property. The result set returned contains the address,
 * Zillow property identifier, and Zestimate for the comparable properties
 * and the principal property for which the comparables are being retrieved.
 * This API call also returns rich property data for the comparables.
 *
 * @author Kaelin Jacobson <kaelinjacobson@gmail.com>
 * @link http://www.zillow.com/howto/api/GetDeepComps.htm Zillow API Documentation
 */
class DeepCompsResponse extends Response {

    /**
     * The original property
     *
     * @var AdvancedProperty
     */
    protected $principal;

    /**
     * A list of properties that are comparable to the requested on
     *
     * @var Comparables
     */
    protected $comparables;

    /**
     * {@inheritdoc}
     *
     * @param SimpleXMLElement $xml The XML to load
     */
    public function __construct(SimpleXMLElement $xml) {
        $this->principal = new AdvancedProperty();
        $this->comparables = new Comparables();
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
