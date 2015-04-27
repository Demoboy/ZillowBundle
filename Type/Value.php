<?php

/**
 * This file is part of the KMJZillowBundle
 * @copyright (c) 2014, Kaelin Jacobson
 * @category Types
 */

namespace KMJ\ZillowBundle\Type;

use KMJ\ZillowBundle\Interfaces\XmlMapper;

/**
 * Defines the Zillow Value Type
 *
 * @author Kaelin Jacobson <kaelinjacobson@gmail.com>
 */
class Value implements XmlMapper {

    use \KMJ\ZillowBundle\Traits\PropertyAutoMapper;

    /**
     * Value
     *
     * @var string
     */
    protected $value;

    /**
     * Get the value of Value
     *
     * @return string
     */
    public function getValue() {
        return $this->value;
    }

}
