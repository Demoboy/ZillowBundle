<?php

/**
 * This file is part of the KMJZillowBundle
 * @copyright (c) 2014, Kaelin Jacobson
 * @category Requests
 */

namespace KMJ\ZillowBundle\Request;

use KMJ\ZillowBundle\Response\RegionChildrenResponse;
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
class RegionChildrenRequest extends Request {

    /**
     * The URL to use when performing the request
     */
    const URL = "http://www.zillow.com/webservice/GetRegionChildren.htm";

    /**
     * The regionid of the region to retrieve data from
     *
     * @var string
     */
    protected $regionId;

    /**
     * The state of the region to retrieve data from.
     *
     * @var string
     */
    protected $state;

    /**
     * The city of the region to retrieve data from.
     *
     * @var string
     */
    protected $city;

    /**
     * The county of the region to retrieve subregions from.
     *
     * @var string
     */
    protected $county;

    /**
     * The type of subregions to retrieve (available types: state, county, city, zipcode, and neighborhood)
     *
     * @var string
     */
    protected $childType;

    /**
     * {@inheritdoc}
     *
     * @param SimpleXMLElement $xml The XML from the request.
     */
    protected function handleResponse(SimpleXMLElement $xml) {
        return new RegionChildrenResponse($xml->response->children());
    }

    /**
     * {@inheritdoc}
     * @codeCoverageIgnore
     */
    public function __construct() {
        parent::__construct(self::URL);
    }

    /**
     * Get the value of The regionid of the region to retrieve data from
     *
     * @return string
     */
    public function getRegionId() {
        return $this->regionId;
    }

    /**
     * Set the value of The regionid of the region to retrieve data from
     *
     * @param string $value regionId
     *
     * @return self
     */
    public function setRegionId($value) {
        $this->regionId = $value;

        return $this;
    }

    /**
     * Get the value of The state of the region to retrieve data from.
     *
     * @return string
     */
    public function getState() {
        return $this->state;
    }

    /**
     * Set the value of The state of the region to retrieve data from.
     *
     * @param string $value state
     *
     * @return self
     */
    public function setState($value) {
        $this->state = $value;

        return $this;
    }

    /**
     * Get the value of The city of the region to retrieve data from.
     *
     * @return string
     */
    public function getCity() {
        return $this->city;
    }

    /**
     * Set the value of The city of the region to retrieve data from.
     *
     * @param string $value city
     *
     * @return self
     */
    public function setCity($value) {
        $this->city = $value;

        return $this;
    }

    /**
     * Get the value of The county of the region to retrieve subregions from.
     *
     * @return string
     */
    public function getCounty() {
        return $this->county;
    }

    /**
     * Set the value of The county of the region to retrieve subregions from.
     *
     * @param string $value county
     *
     * @return self
     */
    public function setCounty($value) {
        $this->county = $value;

        return $this;
    }

    /**
     * Get the value of The type of subregions to retrieve (available types: state, county, city, zipcode, and neighborhood)
     *
     * @return string
     */
    public function getChildType() {
        return $this->childType;
    }

    /**
     * Set the value of The type of subregions to retrieve (available types: state, county, city, zipcode, and neighborhood)
     *
     * @param string $value childType
     *
     * @return self
     */
    public function setChildType($value) {
        $this->childType = $value;

        return $this;
    }

}
