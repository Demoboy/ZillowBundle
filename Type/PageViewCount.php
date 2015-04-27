<?php

/**
 * This file is part of the KMJZillowBundle
 * @copyright (c) 2014, Kaelin Jacobson
 * @category Types
 */

namespace KMJ\ZillowBundle\Type;

use KMJ\ZillowBundle\Interfaces\XmlMapper;

/**
 * Defines the Zillow Page View Type
 *
 * @author Kaelin Jacobson <kaelinjacobson@gmail.com>
 */
class PageViewCount implements XmlMapper {

    use \KMJ\ZillowBundle\Traits\PropertyAutoMapper;

    /**
     * The current month
     *
     * @var integer
     */
    protected $currentMonth;

    /**
     * Total page views
     *
     * @var integer
     */
    protected $total;

    /**
     * Get the value of The current month
     *
     * @return integer
     */
    public function getCurrentMonth() {
        return $this->currentMonth;
    }

    /**
     * Get the value of Total page views
     *
     * @return integer
     */
    public function getTotal() {
        return $this->total;
    }

}
