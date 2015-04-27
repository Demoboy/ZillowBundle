<?php

/**
 * This file is part of the KMJZillowBundle
 * @copyright (c) 2014, Kaelin Jacobson
 * @category Requests
 */

namespace KMJ\ZillowBundle\Request;

/**
 * Basic Chart Request
 *
 * @author Kaelin Jacobson <kaelinjacobson@gmail.com>
 * @link http://www.zillow.com/howto/api/GetChart.htm Zillow API Documentation
 */
abstract class BasicChartRequest extends Request {

    /**
     * A string value that specifies whether to show the percent change. parameter
     * value of "percent," or dollar change, parameter value of "dollar"
     *
     * @var string
     */
    protected $unitType;

    /**
     * An integer value that specifies the width of the generated image;
     * the value must be between 200 and 600, inclusive
     *
     * @var integer
     */
    protected $width;

    /**
     * An integer value that specifies the height of the generated image;
     * the value must be between 100 and 300, inclusive.
     *
     * @var integer
     */
    protected $height;

    /**
     * The duration of past data that needs to be shown in the chart.
     * Valid values are "1year", "5years" and "10years".
     * If unspecified, the value defaults to "1year".
     *
     * @var string
     */
    protected $chartDuration;

    /**
     * {@inheritdoc}
     *
     * @param string $propertyName The property name to translate
     */
    protected function translateKey($propertyName) {
        switch ($propertyName) {
            case "unitType":
                return "unit-type";
        }

        return null;
    }

    /**
     * Get the value of A string value that specifies whether to show the percent change
     * 
     * @codeCoverageIgnore
     * @return string
     */
    public function getUnitType() {
        return $this->unitType;
    }

    /**
     * Set the value of A string value that specifies whether to show the percent change, parameter
     *
     * @codeCoverageIgnore
     * @param string $value unit type
     * @return self
     */
    public function setUnitType($value) {
        $this->unitType = $value;

        return $this;
    }

    /**
     * Get the value of An integer value that specifies the width of the generated image;
     *
     * @codeCoverageIgnore
     * @return integer
     */
    public function getWidth() {
        return $this->width;
    }

    /**
     * Set the value of An integer value that specifies the width of the generated image;
     *
     * @codeCoverageIgnore
     * @param integer $value width
     *
     * @return self
     */
    public function setWidth($value) {
        $this->width = $value;

        return $this;
    }

    /**
     * Get the value of An integer value that specifies the height of the generated image;
     *
     * @codeCoverageIgnore
     * @return integer
     */
    public function getHeight() {
        return $this->height;
    }

    /**
     * Set the value of An integer value that specifies the height of the generated image;
     *
     * @codeCoverageIgnore
     * @param integer $value height
     *
     * @return self
     */
    public function setHeight($value) {
        $this->height = $value;

        return $this;
    }

    /**
     * Get the value of The duration of past data that needs to be shown in the chart.
     *
     * @codeCoverageIgnore
     * @return string
     */
    public function getChartDuration() {
        return $this->chartDuration;
    }

    /**
     * Set the value of The duration of past data that needs to be shown in the chart.
     *
     * @codeCoverageIgnore
     * @param string $value chart duration
     *
     * @return self
     */
    public function setChartDuration($value) {
        $this->chartDuration = $value;

        return $this;
    }

}
