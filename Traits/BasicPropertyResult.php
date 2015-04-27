<?php

/**
 * This file is part of the KMJZillowBundle
 * @copyright (c) 2014, Kaelin Jacobson
 * @category Traits
 */

namespace KMJ\ZillowBundle\Traits;

/**
 * Defines a set of properties that most zillow api requests 
 *
 * @author Kaelin Jacobson <kaelinjacobson@gmail.com>
 */
trait BasicPropertyResult {

    /**
     * The complete address for the property.
     *
     * @var \KMJ\ZillowBundle\Type\Address
     */
    protected $address;

    /**
     * URLs to specific Zillow pages for this property
     *
     * @var \KMJ\ZillowBundle\Type\PropertyLinks
     */
    protected $links;

    /**
     * Zestimate related data
     *
     * @var \KMJ\ZillowBundle\Type\Zestimate
     */
    protected $zestimate;

    /**
     * Zestimate related data
     *
     * @var \KMJ\ZillowBundle\Type\Zestimate Rent
     */
    protected $rentZestimate;

    /**
     * Local real estate data
     *
     * @var \KMJ\ZillowBundle\Type\LocalRealEstate
     */
    protected $localRealEstate;

    /**
     * Initializes the basic properties of the class
     */
    private function init() {
        $this->address = new \KMJ\ZillowBundle\Type\Address();
        $this->zestimate = new \KMJ\ZillowBundle\Type\Zestimate();
        $this->rentZestimate = new \KMJ\ZillowBundle\Type\Zestimate();
        $this->localRealEstate = new \KMJ\ZillowBundle\Type\LocalRealEstate();
        $this->links = new \KMJ\ZillowBundle\Type\PropertyLinks();
    }

    /**
     * Get the value of The complete address for the property.
     *
     * @return \KMJ\ZillowBundle\Type\Address
     */
    public function getAddress() {
        return $this->address;
    }

    /**
     * Get the value of URLs to specific Zillow pages for this property
     *
     * @return \KMJ\ZillowBundle\Type\PropertyLinks
     */
    public function getLinks() {
        return $this->links;
    }

    /**
     * Get the value of Zestimate related data
     *
     * @return \KMJ\ZillowBundle\Type\Zestimate
     */
    public function getZestimate() {
        return $this->zestimate;
    }

    /**
     * Get the value of Zestimate related data
     *
     * @return \KMJ\ZillowBundle\Type\Zestimate Rent
     */
    public function getRentZestimate() {
        return $this->rentZestimate;
    }

    /**
     * Get the value of Real estate data for neighborhood, city, and State
     *
     * @return \KMJ\ZillowBundle\Type\LocalRealEstate
     */
    public function getLocalRealEstate() {
        return $this->localRealEstate;
    }

}
