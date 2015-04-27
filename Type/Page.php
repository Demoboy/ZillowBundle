<?php

/**
 * This file is part of the KMJZillowBundle
 * @copyright (c) 2014, Kaelin Jacobson
 * @category Types
 */

namespace KMJ\ZillowBundle\Type;

use KMJ\ZillowBundle\Interfaces\XmlMapper;

/**
 * Defines the Zillow Page Type
 *
 * @author Kaelin Jacobson <kaelinjacobson@gmail.com>
 */
class Page implements XmlMapper {

    use \KMJ\ZillowBundle\Traits\PropertyAutoMapper;

    /**
     * Name of the page
     *
     * @var string
     */
    protected $name;

    /**
     * Tables
     *
     * @var Tables
     */
    protected $tables;

    /**
     * Segmentation
     *
     * @var Segmentation
     */
    protected $segmentation;

    /**
     * Uniqueness
     *
     * @var Uniqueness
     */
    protected $uniqueness;

    /**
     * Basic constructor
     */
    public function __construct() {
        $this->tables = new Tables();
        $this->segmentation = new Segmentation();
        $this->uniqueness = new Uniqueness();
    }

    /**
     * Get the value of Name of the page
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Get the value of Tables
     *
     * @return Tables
     */
    public function getTables() {
        return $this->tables;
    }

    /**
     * Get the value of Segmentation
     *
     * @return Segmentation
     */
    public function getSegmentation() {
        return $this->segmentation;
    }

    /**
     * Get the value of Uniqueness
     *
     * @return Uniqueness
     */
    public function getUniqueness() {
        return $this->uniqueness;
    }

}
