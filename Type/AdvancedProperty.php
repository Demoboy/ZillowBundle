<?php

/**
 * This file is part of the KMJZillowBundle
 * @copyright (c) 2014, Kaelin Jacobson
 * @category Types
 */

namespace KMJ\ZillowBundle\Type;

use KMJ\ZillowBundle\Interfaces\XmlMapper;

/**
 * Defines the Zillow Property type
 *
 * @author Kaelin Jacobson <kaelinjacobson@gmail.com>
 */
class AdvancedProperty implements XmlMapper {

    use \KMJ\ZillowBundle\Traits\PropertyAutoMapper,
        \KMJ\ZillowBundle\Traits\AdvancedPropertyResult {
        \KMJ\ZillowBundle\Traits\AdvancedPropertyResult::formatValue insteadof \KMJ\ZillowBundle\Traits\PropertyAutoMapper;
    }

    /**
     * Basic constructor
     */
    public function __construct() {
        $this->init();
    }

}
