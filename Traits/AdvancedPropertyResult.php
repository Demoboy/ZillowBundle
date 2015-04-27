<?php

/**
 * This file is part of the KMJZillowBundle
 * @copyright (c) 2014, Kaelin Jacobson
 * @category Traits
 */

namespace KMJ\ZillowBundle\Traits;

/**
 * Defines a set of properties that most zillow api requests 
 *
 * @author Kaelin Jacobson <kaelinjacobson@gmail.com>
 */
trait AdvancedPropertyResult {

    use BasicPropertyResult;

    /**
     * This code specifies the type of home
     *
     * @var string
     */
    protected $usecode;

    /**
     * The year of the most recent tax assessment
     *
     * @var string
     */
    protected $taxAssessmentYear;

    /**
     * The most recent tax assessment
     *
     * @var string
     */
    protected $taxAssessment;

    /**
     * The year in which the property was constructed.
     *
     * @var string
     */
    protected $yearBuilt;

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
     * The date of last sale for this property.
     *
     * @var \DateTime
     */
    protected $lastSoldDate;

    /**
     * The price of the last sale for this property.
     *
     * @var string
     */
    protected $lastSoldPrice;

    /**
     * {@inheritdoc}
     *
     * @param string $key The key for the value
     * @param string $value The value to be formated
     */
    public function formatValue($key, $value) {
        switch ($key) {
            case "lastSoldDate":
                return new \DateTime($value);
            default:
                return (string) $value;
        }
    }

    /**
     * Get the value of Usecode
     *
     * @return string This code specifies the type of home
     */
    public function getUsecode() {
        return $this->usecode;
    }

    /**
     * Get the value of Tax Assessment Year
     *
     * @return string The year of the most recent tax assessment
     */
    public function getTaxAssessmentYear() {
        return $this->taxAssessmentYear;
    }

    /**
     * Get the value of Tax Assessment
     *
     * @return string The most recent tax assessment
     */
    public function getTaxAssessment() {
        return $this->taxAssessment;
    }

    /**
     * Get the value of Year Built
     *
     * @return string The year in which the property was constructed.
     */
    public function getYearBuilt() {
        return $this->yearBuilt;
    }

    /**
     * Get the value of Lot Size Sq Ft
     *
     * @return string The size of the lot in sq. ft
     */
    public function getLotSizeSqFt() {
        return $this->lotSizeSqFt;
    }

    /**
     * Get the value of Finished Sq Ft
     *
     * @return string The size of the finished property in sq. ft.
     */
    public function getFinishedSqFt() {
        return $this->finishedSqFt;
    }

    /**
     * Get the value of Bathrooms
     *
     * @return string Number of bathrooms in the property.
     */
    public function getBathrooms() {
        return $this->bathrooms;
    }

    /**
     * Get the value of Bedrooms
     *
     * @return string Number of bedrooms in the property.
     */
    public function getBedrooms() {
        return $this->bedrooms;
    }

    /**
     * Get the value of Last Sold Date
     *
     * @return \DateTime The date of last sale for this property.
     */
    public function getLastSoldDate() {
        return $this->lastSoldDate;
    }

    /**
     * Get the value of Last Sold Price
     *
     * @return string The price of the last sale for this property.
     */
    public function getLastSoldPrice() {
        return $this->lastSoldPrice;
    }

}
