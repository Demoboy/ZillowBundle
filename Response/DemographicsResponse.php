<?php

/**
 * This file is part of the KMJZillowBundle
 * @copyright (c) 2014, Kaelin Jacobson
 * @category Response
 */

namespace KMJ\ZillowBundle\Response;

use KMJ\ZillowBundle\Type\DemographicCharts;
use KMJ\ZillowBundle\Type\DemographicLinks;
use KMJ\ZillowBundle\Type\DemographicPages;
use KMJ\ZillowBundle\Type\Region;
use SimpleXMLElement;

/**
 * For a specified region, the GetDemographics API returns a set of market,
 * affordability, real estate, and demographic data, including:*
 *       Local Market Data (e.g., median list price, number of homes for sale, percent listing price reduction)
 *       Affordability data (e.g., Zillow Home Value Index, 1-Yr change, property tax, etc.)
 *       Homes and Real Estate data (e.g., percent owners & renters, median home size, average year built, etc.)
 *       People data from US Census (e.g., median household income, median age, average commute time, average household size, etc.)
 *       Who Lives Here (if available for the region)
 *       What's Unique About the People (if available for the region)
 *       A region can be specified either through its respective Region ID, its zipcode, or by providing one to three parameters: state, city, neighborhood. The neighborhood parameter can be omitted if only city data is desired.
 *
 * Note: Demographic data is only available for cities and neighborhoods. If a region does not have demographic data, it may still have local market data available.
 *
 * @author Kaelin Jacobson <kaelinjacobson@gmail.com>
 * @link http://www.zillow.com/howto/api/GetDemographics.htm Zillow API Documentation
 */
class DemographicsResponse extends Response {

    /**
     * The Region infromation
     *
     * @var Region
     */
    protected $region;

    /**
     * Demographic links
     *
     * @var DemographicLinks
     */
    protected $links;

    /**
     * Charts for the demographic
     *
     * @var DemographicCharts
     */
    protected $charts;

    /**
     * Pages for the demographic
     *
     * @var DemographicPages
     */
    protected $pages;

    /**
     * {@inheritdoc}
     *
     * @param SimpleXMLElement $xml The XML to load
     */
    public function __construct(SimpleXMLElement $xml) {
        $this->region = new Region;
        $this->links = new DemographicLinks();
        $this->charts = new DemographicCharts();
        $this->pages = new DemographicPages();
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
     * Get the value of Demographic links
     *
     * @return DemographicLinks
     */
    public function getLinks() {
        return $this->links;
    }

    /**
     * Get the value of Charts for the demographic
     *
     * @return DemographicCharts
     */
    public function getCharts() {
        return $this->charts;
    }

    /**
     * Get the value of Pages for the demographic
     *
     * @return DemographicPages
     */
    public function getPages() {
        return $this->pages;
    }

}
