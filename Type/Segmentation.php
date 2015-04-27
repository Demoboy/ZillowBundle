<?php

/**
 * This file is part of the KMJZillowBundle
 * @copyright (c) 2014, Kaelin Jacobson
 * @category Types
 */

namespace KMJ\ZillowBundle\Type;

/**
 * Defines the Zillow Segmentation Type
 *
 * @author Kaelin Jacobson <kaelinjacobson@gmail.com>
 */
class Segmentation extends LoopableType {

    use \KMJ\ZillowBundle\Traits\PropertyAutoMapper;

    /**
     * Lives here
     *
     * @var array 
     */
    protected $livesHere;

    /**
     * Basic Constructor
     */
    public function __construct() {
        $this->livesHere = array();
    }

    /**
     * {@inheritdoc}
     *
     * @return array
     */
    public function getData() {
        return $this->livesHere;
    }

    /**
     * {@inheritdoc}
     * 
     * @param $key The key to get a blank object for
     */
    public function getBlankForKey($key) {
        switch ($key) {
            case "liveshere":
                return new LivesHere();
        }
    }

}
