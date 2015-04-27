<?php

/**
 * This file is part of the KMJZillowBundle
 * @copyright (c) 2014, Kaelin Jacobson
 * @category Requests
 */

namespace KMJ\ZillowBundle\Type;

use KMJ\ZillowBundle\Interfaces\XmlMapper;
use SimpleXMLElement;

/**
 * Defines the Zillow LocalRealEstate Type
 *
 * @author Kaelin Jacobson <kaelinjacobson@gmail.com>
 */
class LocalRealEstate implements XmlMapper {

    use \KMJ\ZillowBundle\Traits\PropertyAutoMapper;

    /**
     * The region information
     *
     * @var Region
     */
    protected $region;

    /**
     * {@inheritdoc}
     *
     * @param SimpleXMLElement $xml The XML to load
     */
    public function __construct() {
        $this->region = new Region();
    }

    /**
     * Get the value of The region information
     *
     * @return Region
     */
    public function getRegion() {
        return $this->region;
    }

}
