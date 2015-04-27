<?php

/**
 * This file is part of the KMJZillowBundle
 * @copyright (c) 2014, Kaelin Jacobson
 * @category Response
 */

namespace KMJ\ZillowBundle\Response;

/**
 * The GetChart API generates a URL for an image file that displays historical
 * Zestimates for a specific property. The API accepts as input the Zillow
 * Property ID as well as a chart type: either percentage or dollar value change.
 * Optionally, the API accepts width and height parameters that constrain the
 * size of the image. The historical data can be for the past 1 year, 5 years
 * or 10 years.
 *
 * @author Kaelin Jacobson <kaelinjacobson@gmail.com>
 * @link http://www.zillow.com/howto/api/GetChart.htm Zillow API Documentation
 */
class ChartResponse extends Response {

    /**
     * The API returns a url to an image showing the chart as specified in the API call.
     *
     * @var string
     */
    protected $url;

    /**
     * URL to find other charts and data
     *
     * @var string
     */
    protected $graphsAndData;

    /**
     * Get the value of The API returns a url to an image showing the chart as specified in the API call.
     *
     * @return string
     */
    public function getUrl() {
        return $this->url;
    }

    /**
     * Get the value of URL to find other charts and data
     *
     * @return string
     */
    public function getGraphsAndData() {
        return $this->graphsAndData;
    }

}
