<?php

/**
 * This file is part of the KMJZillowBundle
 * @copyright (c) 2014, Kaelin Jacobson
 * @category Response
 */

namespace KMJ\ZillowBundle\Response;

use KMJ\ZillowBundle\Type\RegionLinks;
use SimpleXMLElement;

/**
 * The GetRegionChart API generates a URL for an image file that displays the
 * historical Zestimates for a specific geographic region. The API accepts as
 * input the name of the region as well as a chart type: either percentage or
 * dollar value change. Optionally, the API accepts width and height parameters
 * that constrain the size of the image. The historical data can be for the
 * past 1 year, 5 years or 10 years.
 *
 * @author Kaelin Jacobson <kaelinjacobson@gmail.com>
 * @link http://www.zillow.com/howto/api/GetRegionChart.htm Zillow API Documentation
 */
class RegionChartResponse extends Response {

    /**
     * The API returns a url to an image showing the chart as specified in the API call.
     *
     * @var string
     */
    protected $url;

    /**
     * Link to zillow page for region
     *
     * @var string 
     */
    protected $link;

    /**
     * Property Links for region
     * 
     *
     * @var RegionLinks 
     */
    protected $links;

    /**
     * {@inheritdoc}
     *
     * @param SimpleXMLElement $xml The XML to load
     */
    public function __construct(SimpleXMLElement $xml) {
        $this->links = new RegionLinks();

        parent::__construct($xml);
    }

}
