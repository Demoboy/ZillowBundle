<?php

/**
 * This file is part of the KMJZillowBundle
 * @copyright (c) 2014, Kaelin Jacobson
 * @category Types
 */

namespace KMJ\ZillowBundle\Type;

use KMJ\ZillowBundle\Interfaces\XmlMapper;

/**
 * Defines the Zillow Region Links type
 *
 * @author Kaelin Jacobson <kaelinjacobson@gmail.com>
 */
class RegionLinks implements XmlMapper {

    use \KMJ\ZillowBundle\Traits\PropertyAutoMapper;

    /**
     * URL to region overview page
     *
     * @var string
     */
    protected $overview;

    /**
     * URL to region for sale by owner page
     *
     * @var string
     */
    protected $forSaleByOwner;

    /**
     * URL to region for sale page
     *
     * @var string
     */
    protected $forSale;

    /**
     * URL to local page
     *
     * @var string
     */
    protected $local;

    /**
     * Get the value of URL to region overview page
     *
     * @return string
     */
    public function getOverview() {
        return $this->overview;
    }

    /**
     * Get the value of URL to region for sale by owner page
     *
     * @return string
     */
    public function getForSaleByOwner() {
        return $this->forSaleByOwner;
    }

    /**
     * Get the value of URL to region for sale page
     *
     * @return string
     */
    public function getForSale() {
        return $this->forSale;
    }

    /**
     * Get the value of URL to local page
     *
     * @return string
     */
    public function getLocal() {
        return $this->local;
    }

}
