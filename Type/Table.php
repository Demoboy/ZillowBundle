<?php

/**
 * This file is part of the KMJZillowBundle
 * @copyright (c) 2014, Kaelin Jacobson
 * @category Types
 */

namespace KMJ\ZillowBundle\Type;

use KMJ\ZillowBundle\Interfaces\XmlMapper;

/**
 * Defines the Zillow Table Type
 *
 * @author Kaelin Jacobson <kaelinjacobson@gmail.com>
 */
class Table implements XmlMapper {

    use \KMJ\ZillowBundle\Traits\PropertyAutoMapper;

    /**
     * Table name
     *
     * @var string
     */
    protected $name;

    /**
     * Table Data
     *
     * @var TableData
     */
    protected $data;

    /**
     * Basic Constructor
     */
    public function __construct() {
        $this->data = new TableData();
    }

    /**
     * Get the value of Table name
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Get the value of Table Data
     *
     * @return TableData
     */
    public function getData() {
        return $this->data;
    }

}
