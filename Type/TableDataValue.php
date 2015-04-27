<?php

/**
 * This file is part of the KMJZillowBundle
 * @copyright (c) 2014, Kaelin Jacobson
 * @category Types
 */

namespace KMJ\ZillowBundle\Type;

use KMJ\ZillowBundle\Interfaces\XmlMapper;

/**
 * Defines the Zillow Table Data Value Type
 *
 * @author Kaelin Jacobson <kaelinjacobson@gmail.com>
 */
class TableDataValue implements XmlMapper {

    use \KMJ\ZillowBundle\Traits\PropertyAutoMapper;

    /**
     * Data for the neighborhood
     *
     * @var Value 
     */
    protected $neighborhood;

    /**
     * Data for the city
     *
     * @var Value 
     */
    protected $city;

    /**
     * Data for the nation
     *
     * @var Value 
     */
    protected $nation;

    /**
     * Basic constructor
     */
    public function __construct() {
        $this->neighborhood = new Value();
        $this->city = new Value();
        $this->nation = new Value();
    }

}
