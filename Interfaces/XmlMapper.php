<?php

/**
 * This file is part of the KMJZillowBundle
 * @copyright (c) 2014, Kaelin Jacobson
 * @category Requests
 */

namespace KMJ\ZillowBundle\Interfaces;

/**
 * XMLMapper should be implemented by any class that wants to autoload xml into class properites
 * 
 * @author Kaelin Jacobson <kaelinjacobson@gmail.com>
 */
interface XmlMapper {

    /**
     * Load the xml into the properties
     * 
     * @param \SimpleXMLElement $xml The XML to load
     */
    public function load(\SimpleXMLElement $xml);
}
