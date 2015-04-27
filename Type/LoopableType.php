<?php

/**
 * This file is part of the KMJZillowBundle
 * @copyright (c) 2014, Kaelin Jacobson
 * @category Types
 */

namespace KMJ\ZillowBundle\Type;

use ArrayIterator;
use Countable;
use IteratorAggregate;
use KMJ\ZillowBundle\Interfaces\XmlArrayMapper;
use KMJ\ZillowBundle\Interfaces\XmlMapper;

/**
 * Abstract class that allows types that would be an array just by themselves
 * a shortcut to allow direct iteration.
 * 
 * @author Kaelin Jacobson <kaelinjacobson@gmail.com>
 */
abstract class LoopableType implements XmlMapper, XmlArrayMapper, Countable, IteratorAggregate {

    use \KMJ\ZillowBundle\Traits\PropertyAutoMapper;

    /**
     * {@inheritdoc}
     * 
     * @param string $mode Not implemented
     * @return type
     */
    public function count($mode = 'COUNT_NORMAL') {
        return sizeof($this->getData());
    }

    /**
     * {@inheritdoc}
     * 
     * @return ArrayIterator
     */
    public function getIterator() {
        return new ArrayIterator($this->getData());
    }

    /**
     * Returns an array that contains that data to loop over
     */
    abstract public function getData();
}
