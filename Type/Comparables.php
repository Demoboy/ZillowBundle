<?php

/**
 * This file is part of the KMJZillowBundle
 * @copyright (c) 2014, Kaelin Jacobson
 * @category Types
 */

namespace KMJ\ZillowBundle\Type;

/**
 * Defines the Zillow Comparables type
 *
 * @author Kaelin Jacobson <kaelinjacobson@gmail.com>
 */
class Comparables extends LoopableType {

    use \KMJ\ZillowBundle\Traits\PropertyAutoMapper;

    /**
     * Comparable houses
     *
     * @var array
     */
    protected $comp;

    /**
     * Basic Constructor
     */
    public function __construct() {
        $this->comp = array();
    }

    /**
     * {@inheritdoc}
     * 
     * @param $key The key to get a blank object for
     */
    public function getBlankForKey($key) {
        switch ($key) {
            case "comp":
                return new AdvancedProperty();
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return array
     */
    public function getData() {
        return $this->comp;
    }

}
