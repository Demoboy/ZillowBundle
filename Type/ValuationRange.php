<?php

/**
 * This file is part of the KMJZillowBundle
 * @copyright (c) 2014, Kaelin Jacobson
 * @category Types
 */

namespace KMJ\ZillowBundle\Type;

use KMJ\ZillowBundle\Interfaces\XmlMapper;

/**
 * Defines Zillow Valuation Range type
 *
 * @author Kaelin Jacobson <kaelinjacobson@gmail.com>
 */
class ValuationRange implements XmlMapper {

    use \KMJ\ZillowBundle\Traits\PropertyAutoMapper;

    /**
     * The low end of the range
     *
     * @var string
     */
    protected $low;

    /**
     * The high end of the range
     *
     * @var string
     */
    protected $high;

    /**
     * Get the value of The low end of the range
     *
     * @return string
     */
    public function getLow() {
        return $this->low;
    }

    /**
     * Get the value of The high end of the range
     *
     * @return string
     */
    public function getHigh() {
        return $this->high;
    }

}
