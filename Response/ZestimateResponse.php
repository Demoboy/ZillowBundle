<?php

/**
 * This file is part of the KMJZillowBundle
 * @copyright (c) 2014, Kaelin Jacobson
 * @category Responses
 */

namespace KMJ\ZillowBundle\Response;

use KMJ\ZillowBundle\Type\Address;
use KMJ\ZillowBundle\Type\LocalRealEstate;
use KMJ\ZillowBundle\Type\PropertyLinks;
use KMJ\ZillowBundle\Type\Region;
use KMJ\ZillowBundle\Type\Zestimate;
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
class ZestimateResponse extends Response {

    /**
     * The complete address for the property.
     *
     * @var Address
     */
    protected $address;

    /**
     * URLs to specific Zillow pages for this property
     *
     * @var PropertyLinks
     */
    protected $links;

    /**
     * Zestimate related data
     *
     * @var Zestimate
     */
    protected $zestimate;

    /**
     * Zestimate related data
     *
     * @var Zestimate Rent
     */
    protected $rentZestimate;

    /**
     * Real estate data for neighborhood, city, and State
     *
     * @var LocalRealEstate
     */
    protected $localRealEstate;

    /**
     * The regions for the property
     *
     * @var Region
     */
    protected $regions;

    /**
     * {@inheritdoc}
     *
     * @param SimpleXMLElement $xml The XML to load
     */
    public function __construct(SimpleXMLElement $xml) {
        $this->address = new Address();
        $this->zestimate = new Zestimate();
        $this->rentZestimate = new Zestimate();
        $this->localRealEstate = new LocalRealEstate();
        $this->links = new PropertyLinks();
        $this->regions = new Region();

        parent::__construct($xml);
    }

    /**
     * Get the value of The complete address for the property.
     *
     * @return Address
     */
    public function getAddress() {
        return $this->address;
    }

    /**
     * Get the value of URLs to specific Zillow pages for this property
     *
     * @return PropertyLinks
     */
    public function getLinks() {
        return $this->links;
    }

    /**
     * Get the value of Zestimate related data
     *
     * @return Zestimate
     */
    public function getZestimate() {
        return $this->zestimate;
    }

    /**
     * Get the value of Zestimate related data
     *
     * @return Zestimate Rent
     */
    public function getRentZestimate() {
        return $this->rentZestimate;
    }

    /**
     * Get the value of Real estate data for neighborhood, city, and State
     *
     * @return LocalRealEstate
     */
    public function getLocalRealEstate() {
        return $this->localRealEstate;
    }

    /**
     * Get the value of The regions for the property
     *
     * @return Region
     */
    public function getRegions() {
        return $this->regions;
    }

}
