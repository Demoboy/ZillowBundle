<?php

/**
 * This file is part of the KMJZillowBundle
 * @copyright (c) 2014, Kaelin Jacobson
 * @category Types
 */

namespace KMJ\ZillowBundle\Type;

/**
 * Defines the Zillow Uniqueness Type
 *
 * @author Kaelin Jacobson <kaelinjacobson@gmail.com>
 */
class Uniqueness extends LoopableType {

    use \KMJ\ZillowBundle\Traits\PropertyAutoMapper;

    /**
     * Category
     *
     * @var array
     */
    protected $category;

    /**
     * Basic Constructor
     */
    public function __construct() {
        $this->category = array();
    }

    /**
     * {@inheritdoc}
     *
     * @return array
     */
    public function getData() {
        return $this->category;
    }

    /**
     * {@inheritdoc}
     * 
     * @param $key The key to get a blank object for
     */
    public function getBlankForKey($key) {
        switch ($key) {
            case "category":
                return new Category();
        }
    }

}
