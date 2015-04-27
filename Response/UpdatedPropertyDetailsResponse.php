<?php

/**
 * This file is part of the KMJZillowBundle
 * @copyright (c) 2014, Kaelin Jacobson
 * @category Response
 */

namespace KMJ\ZillowBundle\Response;

use KMJ\ZillowBundle\Type\Address;
use KMJ\ZillowBundle\Type\DetailLinks;
use KMJ\ZillowBundle\Type\EditedFacts;
use KMJ\ZillowBundle\Type\PageViewCount;
use SimpleXMLElement;

/**
 * For a specified property, the GetUpdatedPropertyDetails API returns all of
 * the home facts that have been edited by the home's owner or agent.
 * The result set contains the following attributes:
 *       Property address
 *       Zillow property identifier
 *       Posting details such as the agent name, MLS number, price, and posting type (For Sale or Make Me Move ™)
 *       Up to five photos of the property
 *       Updated home facts such as beds, baths, square footage, home description, and neighborhood and school names
 *
 * @author Kaelin Jacobson <kaelinjacobson@gmail.com>
 * @link http://www.zillow.com/howto/api/GetChart.htm Zillow API Documentation
 */
class UpdatedPropertyDetailsResponse extends Response {

    /**
     *  Zillow Property Id
     *
     * @var string
     */
    protected $zpid;

    /**
     * Page view count
     *
     * @var PageViewCount
     */
    protected $pageViewCount;

    /**
     * Address for the property
     *
     * @var Address
     */
    protected $address;

    /**
     * Property detail links
     *
     * @var DetailLinks
     */
    protected $links;

    /**
     * Edited facts
     *
     * @var EditedFacts
     */
    protected $editedFacts;

    /**
     * Desription of the home
     *
     * @var string
     */
    protected $homeDescription;

    /**
     * School district name
     *
     * @var string
     */
    protected $schoolDistrict;

    /**
     * Elementary school name
     *
     * @var string
     */
    protected $elementarySchool;

    /**
     * Middle school name
     *
     * @var string
     */
    protected $middleSchool;

    /**
     * High school name
     *
     * @var string
     */
    protected $highSchool;

    /**
     * {@inheritdoc}
     *
     * @param SimpleXMLElement $xml The XML to load
     */
    public function __construct(SimpleXMLElement $xml) {
        $this->pageViewCount = new PageViewCount();
        $this->address = new Address();
        $this->links = new DetailLinks();
        $this->editedFacts = new EditedFacts();
        parent::__construct($xml);
    }

    /**
     * Get the value of Zillow Property Id
     *
     * @return string
     */
    public function getZpid() {
        return $this->zpid;
    }

    /**
     * Get the value of Page view count
     *
     * @return PageViewCount
     */
    public function getPageViewCount() {
        return $this->pageViewCount;
    }

    /**
     * Get the value of Address for the property
     *
     * @return Address
     */
    public function getAddress() {
        return $this->address;
    }

    /**
     * Get the value of Property detail links
     *
     * @return DetailLinks
     */
    public function getLinks() {
        return $this->links;
    }

    /**
     * Get the value of Edited facts
     *
     * @return EditedFacts
     */
    public function getEditedFacts() {
        return $this->editedFacts;
    }

    /**
     * Get the value of Desription of the home
     *
     * @return string
     */
    public function getHomeDescription() {
        return $this->homeDescription;
    }

    /**
     * Get the value of School district name
     *
     * @return string
     */
    public function getSchoolDistrict() {
        return $this->schoolDistrict;
    }

    /**
     * Get the value of Elementary school name
     *
     * @return string
     */
    public function getElementarySchool() {
        return $this->elementarySchool;
    }

    /**
     * Get the value of Middle school name
     *
     * @return string
     */
    public function getMiddleSchool() {
        return $this->middleSchool;
    }

    /**
     * Get the value of High school name
     *
     * @return string
     */
    public function getHighSchool() {
        return $this->highSchool;
    }

}
