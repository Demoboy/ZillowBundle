<?php

/**
 * This file is part of the KMJZillowBundle
 * @copyright (c) 2014, Kaelin Jacobson
 * @category Responses
 */

namespace KMJ\ZillowBundle\Response;

use KMJ\ZillowBundle\Type\Comparables;
use SimpleXMLElement;

/**
 * The GetComps API returns a list of comparable recent sales for a specified
 * property. The result set returned contains the address, Zillow property
 * identifier, and Zestimate for the comparable properties and the principal
 * property for which the comparables are being retrieved.
 *
 * @author Kaelin Jacobson <kaelinjacobson@gmail.com>
 * @link http://www.zillow.com/howto/api/GetComps.htm Zillow API Documentation
 */
class CompsResponse extends Response {

    /**
     * The original property
     *
     * @var \KMJ\ZillowBundle\Type\Property
     */
    protected $principal;

    /**
     * Comparable properties
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
        $this->principal = new \KMJ\ZillowBundle\Type\Property();
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

    /**
     * Get the value of The original property
     *
     * @return \KMJ\ZillowBundle\Type\Property
     */
    public function getPrincipal() {
        return $this->principal;
    }

    /**
     * Get the value of Comparable properties
     *
     * @return Comparables
     */
    public function getComparables() {
        return $this->comparables;
    }

}
