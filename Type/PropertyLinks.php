<?php

/**
 * This file is part of the KMJZillowBundle
 * @copyright (c) 2014, Kaelin Jacobson
 * @category Types
 */

namespace KMJ\ZillowBundle\Type;

use KMJ\ZillowBundle\Interfaces\XmlMapper;

/**
 * Defines the Zillow Property Links type
 *
 * @author Kaelin Jacobson <kaelinjacobson@gmail.com>
 */
class PropertyLinks implements XmlMapper {

    use \KMJ\ZillowBundle\Traits\PropertyAutoMapper;

    /**
     * URL to home details page
     *
     * @var string
     */
    protected $homeDetails;

    /**
     * URL to graphs and data
     *
     * @var string
     */
    protected $graphsAndData;

    /**
     * URL to map of home
     *
     * @var string
     */
    protected $mapThisHome;

    /**
     * URL to comparable homes
     *
     * @var string
     */
    protected $comparables;

    /**
     * Get the value of URL to home details page
     *
     * @return string
     */
    public function getHomeDetails() {
        return $this->homeDetails;
    }

    /**
     * Get the value of URL to graphs and data
     *
     * @return string
     */
    public function getGraphsAndData() {
        return $this->graphsAndData;
    }

    /**
     * Get the value of URL to map of home
     *
     * @return string
     */
    public function getMapThisHome() {
        return $this->mapThisHome;
    }

    /**
     * Get the value of URL to comparable homes
     *
     * @return string
     */
    public function getComparables() {
        return $this->comparables;
    }

}
