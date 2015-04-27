<?php

/**
 * This file is part of the KMJZillowBundle
 * @copyright (c) 2014, Kaelin Jacobson
 * @category Types
 */

namespace KMJ\ZillowBundle\Type;

use KMJ\ZillowBundle\Interfaces\XmlMapper;

/**
 * Defines the Zillow Address Type
 *
 * @author Kaelin Jacobson <kaelinjacobson@gmail.com>
 */
class Address implements XmlMapper {

    use \KMJ\ZillowBundle\Traits\PropertyAutoMapper;

    /**
     * The street address
     *
     * @var string
     */
    protected $street;

    /**
     * The Zipcode
     *
     * @var string
     */
    protected $zipcode;

    /**
     * The city
     *
     * @var string
     */
    protected $city;

    /**
     * The state
     *
     * @var string
     */
    protected $state;

    /**
     * The latitude
     *
     * @var string
     */
    protected $latitude;

    /**
     * The longitude
     *
     * @var string
     */
    protected $longitude;

    /**
     * Get the value of The street address
     *
     * @return string
     */
    public function getStreet() {
        return $this->street;
    }

    /**
     * Get the value of The Zipcode
     *
     * @return string
     */
    public function getZipcode() {
        return $this->zipcode;
    }

    /**
     * Get the value of The city
     *
     * @return string
     */
    public function getCity() {
        return $this->city;
    }

    /**
     * Get the value of The state
     *
     * @return string
     */
    public function getState() {
        return $this->state;
    }

    /**
     * Get the value of The latitude
     *
     * @return string
     */
    public function getLatitude() {
        return $this->latitude;
    }

    /**
     * Get the value of The longitude
     *
     * @return string
     */
    public function getLongitude() {
        return $this->longitude;
    }

}
