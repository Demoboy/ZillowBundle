<?php

/**
 * This file is part of the KMJZillowBundle
 * @copyright (c) 2014, Kaelin Jacobson
 * @category Types
 */

namespace KMJ\ZillowBundle\Type;

use DateTime;
use KMJ\ZillowBundle\Interfaces\XmlMapper;

/**
 * Defines the Zillow Zestimate type
 *
 * @author Kaelin Jacobson <kaelinjacobson@gmail.com>
 */
class Zestimate implements XmlMapper {

    use \KMJ\ZillowBundle\Traits\PropertyAutoMapper;

    /**
     * The zestimate amount
     *
     * @var string
     */
    protected $amount;

    /**
     * The last date the zestimate was updated
     *
     * @var DateTime
     */
    protected $lastUpdated;

    /**
     * The value change of the estimate
     *
     * @var type
     */
    protected $valueChange;

    /**
     * The range of the zestimate
     *
     * @var ValuationRange
     */
    protected $valuationRange;

    /**
     * The Percentile of the zestimate
     *
     * @var type
     */
    protected $percentile;

    /**
     * Initializes the class and loads the XML element into it
     */
    public function __construct() {
        $this->valuationRange = new ValuationRange();
    }

    /**
     * {@inheritdoc}
     *
     * @param string $key The key for the value
     * @param string $value The value to be formated
     */
    public function formatValue($key, $value) {
        switch ($key) {
            case "last-updated":
                return new DateTime($value);
            default:
                return (string) $value;
        }
    }

    /**
     * Get the value of The zestimate amount
     *
     * @return string
     */
    public function getAmount() {
        return $this->amount;
    }

    /**
     * Get the value of The last date the zestimate was updated
     *
     * @return DateTime
     */
    public function getLastUpdated() {
        return $this->lastUpdated;
    }

    /**
     * Get the value of The value change of the estimate
     *
     * @return type
     */
    public function getValueChange() {
        return $this->valueChange;
    }

    /**
     * Get the value of The range of the zestimate
     *
     * @return ValuationRange
     */
    public function getValuationRange() {
        return $this->valuationRange;
    }

    /**
     * Get the value of The Percentile of the zestimate
     *
     * @return type
     */
    public function getPercentile() {
        return $this->percentile;
    }

}
