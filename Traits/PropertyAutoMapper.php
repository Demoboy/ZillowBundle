<?php

/**
 * This file is part of the KMJZillowBundle
 * @copyright (c) 2014, Kaelin Jacobson
 * @category Requests
 */

namespace KMJ\ZillowBundle\Traits;

/**
 * Defines a set of methods that can translate \SimpleXMLElements in to the class
 * that uses this trait
 *
 * @author Kaelin Jacobson <kaelinjacobson@gmail.com>
 */
trait PropertyAutoMapper {

    /**
     * Loads the xml into the closest matched property name for a class. 
     * 
     * It will remove special charaters so that "last-date*" will transform to "lastdate" and then 
     * iterate through the class properties doing an str_lower on each property name.
     * If the proptery name and XML node name are the same, the value is then 
     * tested to be an object or null. If the value is an object
     * and the object can implament the XmlMapper class, that objects load method. If the object is null,
     * it is formated using the $this->formatValue() and then set to the property's value.
     * is called and passed the current xml node.
     * 
     * @param \SimpleXMLElement $xml The xml to load
     */
    public function load(\SimpleXMLElement $xml) {
        $rf = new \ReflectionClass($this);
        $properties = $rf->getProperties();

        if ($xml->attributes() != null) {
            foreach ($xml->attributes() as $attribute => $aValue) {
                $modAttribute = preg_replace('/[^a-zA-Z0-9]/', '', $attribute);
                foreach ($properties as $prop) {
                    if (strtolower($prop->getName()) == strtolower($modAttribute)) {
                        $prop->setAccessible(true);
                        $classVal = $prop->getValue($this);

                        if ($classVal instanceof \KMJ\ZillowBundle\Interfaces\XmlMapper) {
                            $classVal->load($aValue);
                        } else {
                            $prop->setValue($this, $this->formatValue($attribute, $aValue));
                        }
                    }
                }
            }
        }

        foreach ($xml as $key => $value) {
            $modKey = preg_replace('/[^a-zA-Z0-9]/', '', $key);

            foreach ($properties as $prop) {
                if (strtolower($prop->getName()) == strtolower($modKey)) {
                    $prop->setAccessible(true);
                    $classVal = $prop->getValue($this);

                    if (is_array($classVal) && $this instanceof \KMJ\ZillowBundle\Interfaces\XmlArrayMapper) {

                        if ($key == "tables") {
                            echo "here";
                        }
                        $obj = $this->getBlankForKey($key);
                        $obj->load($value);
                        $classVal[] = $obj;
                        $prop->setValue($this, $classVal);
                    } elseif ($classVal instanceof \KMJ\ZillowBundle\Interfaces\XmlMapper) {
                        $classVal->load($value);
                    } else {
                        $prop->setValue($this, $this->formatValue($key, $value));
                    }
                }
            }
        }
    }

    /**
     * Formats the value for a given key
     * 
     * @param string $key The key for the value
     * @param string $value The value to be formated
     * @return mixed the formated value
     */
    protected function formatValue($key, $value) {
        return (string) $value;
    }

}
