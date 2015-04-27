<?php

/**
 * This file is part of the KMJZillowBundle
 * @copyright (c) 2014, Kaelin Jacobson
 * @category Types
 */

namespace KMJ\ZillowBundle\Type;

/**
 * Defines the Zillow List Type
 *
 * @author Kaelin Jacobson <kaelinjacobson@gmail.com>
 */
class RegionList extends LoopableType {

    /**
     * Array of regions
     *
     * @var array
     */
    protected $region;

    /**
     * Basic Constructor
     */
    public function __construct() {
        $this->region = array();
    }

    /**
     * {@inheritdoc}
     *
     * @return array
     */
    public function getData() {
        return $this->region;
    }

    /**
     * {@inheritdoc}
     * 
     * @param $key The key to get a blank object for
     */
    public function getBlankForKey($key) {
        switch ($key) {
            case "region":
                return new ChildRegion();
        }
    }

}
