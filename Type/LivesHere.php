<?php

/**
 * This file is part of the KMJZillowBundle
 * @copyright (c) 2014, Kaelin Jacobson
 * @category Types
 */

namespace KMJ\ZillowBundle\Type;

use KMJ\ZillowBundle\Interfaces\XmlMapper;

/**
 * Defines the Zillow Lives Here Type
 *
 * @author Kaelin Jacobson <kaelinjacobson@gmail.com>
 */
class LivesHere implements XmlMapper {

    use \KMJ\ZillowBundle\Traits\PropertyAutoMapper;

    /**
     * Title
     *
     * @var string
     */
    protected $title;

    /**
     * Name
     *
     * @var string
     */
    protected $name;

    /**
     * Description
     *
     * @var string
     */
    protected $description;

    /**
     * Get the value of Title
     *
     * @return string
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * Get the value of Name
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Get the value of Description
     *
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }

}
