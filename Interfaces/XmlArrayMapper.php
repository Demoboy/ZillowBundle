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
interface XmlArrayMapper {

    /**
     * Return an empty object for the provided key
     * 
     * @param $key The key to get a blank object for
     */
    public function getBlankForKey($key);
}
