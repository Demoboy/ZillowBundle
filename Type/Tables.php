<?php

/**
 * This file is part of the KMJZillowBundle
 * @copyright (c) 2014, Kaelin Jacobson
 * @category Types
 */

namespace KMJ\ZillowBundle\Type;

/**
 * Defines the Zillow Tables Type
 *
 * @author Kaelin Jacobson <kaelinjacobson@gmail.com>
 */
class Tables extends LoopableType {

    /**
     * Array of tables
     *
     * @var array
     */
    protected $table;

    /**
     * Basic Constructor
     */
    public function __construct() {
        $this->table = array();
    }

    /**
     * {@inheritdoc}
     *
     * @return array
     */
    public function getData() {
        return $this->table;
    }

    /**
     * {@inheritdoc}
     * 
     * @param $key The key to get a blank object for
     */
    public function getBlankForKey($key) {
        switch ($key) {
            case "table":
                return new Table();
        }
    }

}
