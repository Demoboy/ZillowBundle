<?php

/**
 * This file is part of the KMJZillowBundle
 * @copyright (c) 2014, Kaelin Jacobson
 * @category Types
 */

namespace KMJ\ZillowBundle\Type;

use KMJ\ZillowBundle\Interfaces\XmlMapper;

/**
 * Defines the Zillow Category Type
 *
 * @author Kaelin Jacobson <kaelinjacobson@gmail.com>
 */
class Category implements XmlMapper {

    use \KMJ\ZillowBundle\Traits\PropertyAutoMapper;

    /**
     * Type of category
     *
     * @var string
     */
    protected $type;

    /**
     * Characteristics of category
     *
     * @var array
     */
    protected $characteristic;

    /**
     * {@inheritdoc}
     *
     * @param string $key The key for the value
     * @param string $value The value to be formated
     */
    protected function formatValue($key, $value) {
        switch ($key) {
            case "characteristic":
                if (!is_array($value)) {
                    return array((string) $value);
                } else {
                    return $value;
                }
            default:
                return (string) $value;
        }
    }

    /**
     * Get the value of Type of category
     *
     * @return string
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Get the value of Characteristics of category
     *
     * @return array
     */
    public function getCharacteristic() {
        return $this->characteristic;
    }

}
