<?php

/**
 * This file is part of the KMJZillowBundle
 * @copyright (c) 2014, Kaelin Jacobson
 * @category Response
 */

namespace KMJ\ZillowBundle\Response;

use KMJ\ZillowBundle\Type\Region;
use KMJ\ZillowBundle\Type\RegionList;
use SimpleXMLElement;

/**
 * For a specified region, the GetRegionChildren API returns a list of subregions
 * with the following information:
 *
 *      Subregion Type
 *      Region IDs
 *      Region Names
 *      URL to Corresponding Zillow Page (only for cities and neighborhoods)
 *      Latitudes and Longitudes
 *      A region can be specified at various levels of the region hierarchy. An optional childtype parameter can also be specified to return subregions of a specific type.
 *
 * Allowable region types include: state, county, and city. County is an optional
 * parameter unless it is the region to be specified. County and city parameters
 * should not be passed together.
 *
 * Possible childtype parameters include: county, city, zipcode, and neighborhood.
 * Any childtype parameter can be specified as long as the childtype parameter
 * is a subregion type (i.e.. you cannot retrieve the subregion counties of a city).
 *
 * Childtype parameter is optional and defaults to types dependent on the specified
 * region type: state defaults to return subregions of type county, county -> city, city -> zipcode.
 *
 * @author Kaelin Jacobson <kaelinjacobson@gmail.com>
 * @link http://www.zillow.com/howto/api/GetRegionChildren.htm Zillow API Documentation
 */
class RegionChildrenResponse extends Response {

    /**
     * The Region infromation
     *
     * @var Region
     */
    protected $region;

    /**
     * Type of subregions
     *
     * @var type
     */
    protected $subregionType;

    /**
     * List of child regions
     *
     * @var RegionList
     */
    protected $list;

    /**
     * {@inheritdoc}
     *
     * @param SimpleXMLElement $xml The XML to load
     */
    public function __construct(SimpleXMLElement $xml) {
        $this->region = new Region();
        $this->list = new RegionList();

        parent::__construct($xml);
    }

    /**
     * Get the value of The Region infromation
     *
     * @return Region
     */
    public function getRegion() {
        return $this->region;
    }

    /**
     * Get the value of Type of subregions
     *
     * @return type
     */
    public function getSubregionType() {
        return $this->subregionType;
    }

    /**
     * Get the value of List of child regions
     *
     * @return RegionList
     */
    public function getList() {
        return $this->list;
    }

}
