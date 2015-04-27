<?php

/**
 * This file is part of the KMJZillowBundle
 * @copyright (c) 2014, Kaelin Jacobson
 * @category Types
 */

namespace KMJ\ZillowBundle\Type;

use KMJ\ZillowBundle\Interfaces\XmlMapper;

/**
 * Defines the Zillow Address Type
 *
 * @author Kaelin Jacobson <kaelinjacobson@gmail.com>
 */
class TableDataAttribute implements XmlMapper {

    use \KMJ\ZillowBundle\Traits\PropertyAutoMapper;

    /**
     * Name of the attribute
     *
     * @var string
     */
    protected $name;

    /**
     * Value for multiple values
     *
     * @var TableDataValue
     */
    protected $values;

    /**
     * Value of attribute
     *
     * @var string
     */
    protected $value;

    /**
     * Basic constructor
     */
    public function __construct() {
        $this->values = new TableDataValue();
    }

    /**
     * Get the value of Name of the attribute
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Get the value of Value for multiple values
     *
     * @return TableDataValue
     */
    public function getValues() {
        return $this->values;
    }

    /**
     * Get the value of Value of attribute
     *
     * @return string
     */
    public function getValue() {
        return $this->value;
    }

}
