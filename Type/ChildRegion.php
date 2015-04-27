<?php

/**
 * This file is part of the KMJZillowBundle
 * @copyright (c) 2014, Kaelin Jacobson
 * @category Types
 */

namespace KMJ\ZillowBundle\Type;

use KMJ\ZillowBundle\Interfaces\XmlMapper;

/**
 * Defines the Zillow ChildRegion type
 *
 * @author Kaelin Jacobson <kaelinjacobson@gmail.com>
 */
class ChildRegion implements XmlMapper {

    use \KMJ\ZillowBundle\Traits\PropertyAutoMapper;

    /**
     * Id of the region
     *
     * @var string
     */
    protected $id;

    /**
     * Region name
     *
     * @var string
     */
    protected $name;

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
     * Get the value of Id of the region
     *
     * @return string
     */
    public function getId() {
        return $this->id;
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
