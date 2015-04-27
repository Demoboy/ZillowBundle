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
class TableData extends LoopableType {

    /**
     * Array of attributes
     *
     * @var array
     */
    protected $attribute;

    /**
     * Basic Constructor
     */
    public function __construct() {
        $this->attribute = array();
    }

    /**
     * {@inheritdoc}
     *
     * @return array
     */
    public function getData() {
        return $this->attribute;
    }

    /**
     * {@inheritdoc}
     *
     * @param $key The key to get a blank object for
     */
    public function getBlankForKey($key) {
        switch ($key) {
            case "attribute":
                return new TableDataAttribute();
        }
    }

    /**
     * Get the value of Array of attributes
     *
     * @return array
     */
    public function getAttribute() {
        return $this->attribute;
    }

}
