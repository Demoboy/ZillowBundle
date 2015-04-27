<?php

/**
 * This file is part of the KMJZillowBundle
 * @copyright (c) 2014, Kaelin Jacobson
 * @category Types
 */

namespace KMJ\ZillowBundle\Type;

use KMJ\ZillowBundle\Interfaces\XmlMapper;

/**
 * Defines the Zillow Edited Facts Type
 *
 * @author Kaelin Jacobson <kaelinjacobson@gmail.com>
 */
class EditedFacts implements XmlMapper {

    use \KMJ\ZillowBundle\Traits\PropertyAutoMapper;

    /**
     * Home type
     *
     * @var string
     */
    protected $useCode;

    /**
     * The size of the lot in sq. ft
     *
     * @var string
     */
    protected $lotSizeSqFt;

    /**
     * The size of the finished property in sq. ft.
     *
     * @var string
     */
    protected $finishedSqFt;

    /**
     * Number of bathrooms in the property.
     *
     * @var string
     */
    protected $bathrooms;

    /**
     * Number of bedrooms in the property.
     *
     * @var string
     */
    protected $bedrooms;

    /**
     * The year the house was build
     *
     * @var string
     */
    protected $yearBuilt;

    /**
     * Number of floors
     *
     * @var integer
     */
    protected $numFloors;

    /**
     * Number of rooms
     *
     * @var integer
     */
    protected $numRooms;

    /**
     * Type of roof
     *
     * @var string
     */
    protected $roof;

    /**
     * Materials used in the construction of the exterior walls
     *
     * @var string
     */
    protected $exteriorMaterial;

    /**
     * Heating sources
     *
     * @var string
     */
    protected $heatingSources;

    /**
     * Appliances included with the property
     *
     * @var string
     */
    protected $appliances;

    /**
     * Type of flooring
     *
     * @var string
     */
    protected $floorCovering;

    /**
     * Unknown
     *
     * @var string
     */
    protected $rooms;

    /**
     * Type of architecture
     *
     * @var string
     */
    protected $architecture;

    /**
     * Get the value of Home type
     *
     * @return string
     */
    public function getUseCode() {
        return $this->useCode;
    }

    /**
     * Get the value of The size of the lot in sq. ft
     *
     * @return string
     */
    public function getLotSizeSqFt() {
        return $this->lotSizeSqFt;
    }

    /**
     * Get the value of The size of the finished property in sq. ft.
     *
     * @return string
     */
    public function getFinishedSqFt() {
        return $this->finishedSqFt;
    }

    /**
     * Get the value of Number of bathrooms in the property.
     *
     * @return string
     */
    public function getBathrooms() {
        return $this->bathrooms;
    }

    /**
     * Get the value of Number of bedrooms in the property.
     *
     * @return string
     */
    public function getBedrooms() {
        return $this->bedrooms;
    }

    /**
     * Get the value of The year the house was build
     *
     * @return string
     */
    public function getYearBuilt() {
        return $this->yearBuilt;
    }

    /**
     * Get the value of Number of floors
     *
     * @return integer
     */
    public function getNumFloors() {
        return $this->numFloors;
    }

    /**
     * Get the value of Number of rooms
     *
     * @return integer
     */
    public function getNumRooms() {
        return $this->numRooms;
    }

    /**
     * Get the value of Type of roof
     *
     * @return string
     */
    public function getRoof() {
        return $this->roof;
    }

    /**
     * Get the value of Materials used in the construction of the exterior walls
     *
     * @return string
     */
    public function getExteriorMaterial() {
        return $this->exteriorMaterial;
    }

    /**
     * Get the value of Heating sources
     *
     * @return string
     */
    public function getHeatingSources() {
        return $this->heatingSources;
    }

    /**
     * Get the value of Appliances included with the property
     *
     * @return string
     */
    public function getAppliances() {
        return $this->appliances;
    }

    /**
     * Get the value of Type of flooring
     *
     * @return string
     */
    public function getFloorCovering() {
        return $this->floorCovering;
    }

    /**
     * Get the value of Unknown
     *
     * @return string
     */
    public function getRooms() {
        return $this->rooms;
    }

    /**
     * Get the value of Type of architecture
     *
     * @return string
     */
    public function getArchitecture() {
        return $this->architecture;
    }

}
