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
class BasicProperty implements XmlMapper {

    use \KMJ\ZillowBundle\Traits\PropertyAutoMapper,
        \KMJ\ZillowBundle\Traits\BasicPropertyResult;

    /**
     * Basic constructor
     */
    public function __construct() {
        $this->init();
    }

}
