<?php

/**
 * This file is part of the KMJZillowBundle
 * @copyright (c) 2014, Kaelin Jacobson
 * @category Types
 */

namespace KMJ\ZillowBundle\Type;

/**
 * Defines the Zillow Demographic Page Type
 *
 * @author Kaelin Jacobson <kaelinjacobson@gmail.com>
 */
class DemographicPages extends LoopableType {

    /**
     * Array of pages
     *
     * @var array
     */
    protected $page;

    /**
     * Basic Constructor
     */
    public function __construct() {
        $this->page = array();
    }

    /**
     * {@inheritdoc}
     *
     * @return array
     */
    public function getData() {
        return $this->page;
    }

    /**
     * {@inheritdoc}
     * 
     * @param $key The key to get a blank object for
     */
    public function getBlankForKey($key) {
        switch ($key) {
            case "page":
                return new Page();
        }
    }

}
