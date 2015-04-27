<?php

/**
 * This file is part of the KMJZillowBundle
 * @copyright (c) 2014, Kaelin Jacobson
 * @category Requests
 */

namespace KMJ\ZillowBundle\Request;

/**
 * Basic request class.
 *
 * @author Kaelin Jacobson <kaelinjacobson@gmail.com>
 */
abstract class Request {

    /**
     * The number of seconds the cache should be valid
     */
    const CACHE_TIME = 604800;

    /**
     * The Zillow API Key
     *
     * @var string
     */
    private $key;

    /**
     * The URL to make the request to
     *
     * @var string
     */
    private $url;

    /**
     * The cache dir
     *
     * @var string 
     */
    private $cacheDir;

    /**
     * Initializes the URL for the request
     *
     * @param string $url The URL to make the request to
     */
    public function __construct($url) {
        $this->url = $url;

        if (defined("KMJ_ZILLOW_KEY")) {
            $this->key = KMJ_ZILLOW_KEY;
        }

        if (defined("KMJ_ZILLOW_CACHE_DIR")) {
            $this->cacheDir = KMJ_ZILLOW_CACHE_DIR;
        }
    }

    /**
     * Performs the request. This function serializes the current class and converts
     * it into name-value pairs in an array. Then creates a Guzzle client and sends the
     * request. Finally the returned string is converted into an SimpleXML object
     * and tested to determine if the request is valid. If the request is valid the
     * proper response object is created and loaded with the proper values.
     *
     * @return mixed
     * @throws \KMJ\ZillowBundle\Exception\ZillowApiException
     */
    public function getResponse() {
        $cacheXml = null;
        $params = array_merge(array("zws-id" => $this->getKey()), $this->toArray());

        $cacheKey = md5($this->url."?".implode("&", $params));

        $cacheFile = $this->cacheDir . "/" . $cacheKey . ".json";
        
        if (file_exists($cacheFile)) {
            //load the file and make sure the file is still valid
            $cacheResponse = json_decode(file_get_contents($cacheFile));
            
            if ($cacheResponse->expires >= time()) {
                $cacheXml = $cacheResponse->xml;
            } else {
                @unlink($cacheFile);
            }
        }

        if ($cacheXml === null) {
            $client = new \GuzzleHttp\Client();

            $response = $client->get($this->url, array(
                "query" => $params,
            ));
            
            $content = $response->getBody()->getContents();

            $xml = simplexml_load_string($content);

            file_put_contents($cacheFile, json_encode(array(
                "expires" => time() + self::CACHE_TIME,
                "xml" => $content,
            )));
        } else {
            $xml = simplexml_load_string($cacheXml);
        }

        $this->checkError($xml);

        return $this->handleResponse($xml);
    }

    /**
     * Isolates the proper response from the XML and loads it into the response object.
     * 
     * @param \SimpleXMLElement $xml The XML from the request.
     * @return mixed The loaded response object
     */
    abstract protected function handleResponse(\SimpleXMLElement $xml);

    /**
     * This function converts the current class into an array using \ReflectionClass objects
     *
     * @return array
     */
    public function toArray() {
        $array = array();
        $rc = new \ReflectionClass($this);

        foreach ($rc->getProperties() as $prop) {
            $prop->setAccessible(true);

            $translatedKey = $this->translateKey($prop->getName());

            if ($translatedKey === null) {
                $array[strtolower($prop->getName())] = $prop->getValue($this);
            } else {
                $array[strtolower($translatedKey)] = $prop->getValue($this);
            }
        }

        return $array;
    }

    /**
     * Translates a key for a request
     * 
     * @param string $propertyName The property name to translate
     * @return string|null
     */
    protected function translateKey($propertyName) {
        return null;
    }

    /**
     * Check Zillow XML for an error
     *
     * @param \SimpleXMLElement $xml The Zillow response
     * @throws \KMJ\ZillowBundle\Exception\ZillowApiException
     */
    public function checkError($xml) {
        if ($xml->message->code != 0) {
            throw new \KMJ\ZillowBundle\Exception\ZillowApiException((string) $xml->message->text, (int) $xml->message->code);
        }
    }

    /**
     * Get the value of The Zillow API Key
     *
     * @codeCoverageIgnore
     * @return string
     */
    public function getKey() {
        return $this->key;
    }

    /**
     * Set the value of The Zillow API Key
     * 
     * @codeCoverageIgnore
     * @param string $value key
     *
     * @return self
     */
    public function setKey($value) {
        $this->key = $value;

        return $this;
    }

}
