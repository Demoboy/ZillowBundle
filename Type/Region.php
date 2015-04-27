<?php

/**
 * This file is part of the KMJZillowBundle
 * @copyright (c) 2014, Kaelin Jacobson
 * @category Types
 */

namespace KMJ\ZillowBundle\Type;

use KMJ\ZillowBundle\Interfaces\XmlMapper;

/**
 * Defines the Zillow Region type
 *
 * @author Kaelin Jacobson <kaelinjacobson@gmail.com>
 */
class Region implements XmlMapper {

    use \KMJ\ZillowBundle\Traits\PropertyAutoMapper;

    /**
     * Id of the region
     *
     * @var string
     */
    protected $id;

    /**
     * Type of region
     *
     * @var string
     */
    protected $type;

    /**
     * Region name
     *
     * @var string
     */
    protected $name;

    /**
     * Links for more information
     *
     * @var RegionLinks
     */
    protected $links;

    /**
     * The zipcode region id
     *
     * @var string
     */
    protected $zipcodeId;

    /**
     * The city region id
     *
     * @var string
     */
    protected $cityId;

    /**
     * The county region id
     *
     * @var string
     */
    protected $countyId;

    /**
     * The state region id
     *
     * @var string
     */
    protected $stateId;

    /**
     * Region state
     *
     * @var string
     */
    protected $state;

    /**
     * Region city
     *
     * @var string
     */
    protected $city;

    /**
     * Region neighborhood
     *
     * @var string
     */
    protected $neighborhood;

    /**
     * Region latitude
     *
     * @var string
     */
    protected $latitude;

    /**
     * Region longitude
     *
     * @var string
     */
    protected $longitude;

    /**
     * zmm rate url
     *
     * @var string
     */
    protected $zmmRateUrl;

    /**
     * Zindex
     *
     * @var string
     */
    protected $zindex;

    /**
     * URL for more details
     *
     * @var string
     */
    protected $url;

    /**
     * Initializes the class and loads the XML element into it
     */
    public function __construct() {
        $this->links = new RegionLinks();
    }

    /**
     * Get the value of Id of the region
     *
     * @return string
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Get the value of Type of region
     *
     * @return string
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Get the value of Region name
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Get the value of Links for more information
     *
     * @return RegionLinks
     */
    public function getLinks() {
        return $this->links;
    }

    /**
     * Get the value of The zipcode region id
     *
     * @return string
     */
    public function getZipcodeId() {
        return $this->zipcodeId;
    }

    /**
     * Get the value of The city region id
     *
     * @return string
     */
    public function getCityId() {
        return $this->cityId;
    }

    /**
     * Get the value of The county region id
     *
     * @return string
     */
    public function getCountyId() {
        return $this->countyId;
    }

    /**
     * Get the value of The state region id
     *
     * @return string
     */
    public function getStateId() {
        return $this->stateId;
    }

    /**
     * Get the value of Region state
     *
     * @return string
     */
    public function getState() {
        return $this->state;
    }

    /**
     * Get the value of Region city
     *
     * @return string
     */
    public function getCity() {
        return $this->city;
    }

    /**
     * Get the value of Region neighborhood
     *
     * @return string
     */
    public function getNeighborhood() {
        return $this->neighborhood;
    }

    /**
     * Get the value of Region latitude
     *
     * @return string
     */
    public function getLatitude() {
        return $this->latitude;
    }

    /**
     * Get the value of Region longitude
     *
     * @return string
     */
    public function getLongitude() {
        return $this->longitude;
    }

    /**
     * Get the value of zmm rate url
     *
     * @return string
     */
    public function getZmmRateUrl() {
        return $this->zmmRateUrl;
    }

    /**
     * Get the value of Zindex
     *
     * @return string
     */
    public function getZindex() {
        return $this->zindex;
    }

    /**
     * Get the value of URL for more details
     *
     * @return string
     */
    public function getUrl() {
        return $this->url;
    }

}
