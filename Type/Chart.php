<?php

/**
 * This file is part of the KMJZillowBundle
 * @copyright (c) 2014, Kaelin Jacobson
 * @category Types
 */

namespace KMJ\ZillowBundle\Type;

use KMJ\ZillowBundle\Interfaces\XmlMapper;

/**
 * Defines the Zillow Chart Type
 *
 * @author Kaelin Jacobson <kaelinjacobson@gmail.com>
 */
class Chart implements XmlMapper {

    use \KMJ\ZillowBundle\Traits\PropertyAutoMapper;

    /**
     * URL to the location of the chart
     *
     * @var string
     */
    protected $url;

    /**
     * name of the chart
     *
     * @var string
     */
    protected $name;

    /**
     * Get the value of URL to the location of the chart
     *
     * @return string
     */
    public function getUrl() {
        return $this->url;
    }

    /**
     * Get the value of name of the chart
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }

}
