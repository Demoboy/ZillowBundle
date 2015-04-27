<?php

/**
 * This file is part of the KMJZillowBundle
 * @copyright (c) 2014, Kaelin Jacobson
 * @category Types
 */

namespace KMJ\ZillowBundle\Type;

/**
 * Defines the Zillow Address Type
 *
 * @author Kaelin Jacobson <kaelinjacobson@gmail.com>
 */
class DemographicCharts extends LoopableType {

    /**
     * Array of charts
     *
     * @var array
     */
    protected $chart;

    /**
     * Basic Constructor
     */
    public function __construct() {
        $this->chart = array();
    }

    /**
     * {@inheritdoc}
     *
     * @return array
     */
    public function getData() {
        return $this->chart;
    }

    /**
     * {@inheritdoc}
     * 
     * @param $key The key to get a blank object for
     */
    public function getBlankForKey($key) {
        switch ($key) {
            case "chart":
                return new Chart();
        }
    }

}
