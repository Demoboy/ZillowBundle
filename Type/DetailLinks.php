<?php

/**
 * This file is part of the KMJZillowBundle
 * @copyright (c) 2014, Kaelin Jacobson
 * @category Types
 */

namespace KMJ\ZillowBundle\Type;

use KMJ\ZillowBundle\Interfaces\XmlMapper;

/**
 * Defines the Zillow Detail Links type
 *
 * @author Kaelin Jacobson <kaelinjacobson@gmail.com>
 */
class DetailLinks implements XmlMapper {

    use \KMJ\ZillowBundle\Traits\PropertyAutoMapper;

    /**
     * URL to home details page
     *
     * @var string
     */
    protected $homeDetails;

    /**
     * URL to photo gallery page
     *
     * @var string
     */
    protected $photoGallery;

    /**
     * URL to home info page
     *
     * @var string
     */
    protected $homeInfo;

    /**
     * Get the value of URL to home details page
     *
     * @return string
     */
    public function getHomeDetails() {
        return $this->homeDetails;
    }

    /**
     * Get the value of URL to photo gallery page
     *
     * @return string
     */
    public function getPhotoGallery() {
        return $this->photoGallery;
    }

    /**
     * Get the value of URL to home info page
     *
     * @return string
     */
    public function getHomeInfo() {
        return $this->homeInfo;
    }

}
