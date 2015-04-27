<?php

/**
 * This file is part of the KMJZillowBundle
 * @copyright (c) 2014, Kaelin Jacobson
 * @category Requests
 */

namespace KMJ\ZillowBundle\Service;

/**
 * Loads the Zillow API key into a global constant
 *
 * @author Kaelin Jacobson <kaelinjacobson@gmail.com>
 */
class KeyLoader {

    /**
     * Array of configs
     *
     * @var array
     */
    protected $config;

    /**
     * Symfony cache dir
     *
     * @var string
     */
    private $cacheDir;

    /**
     * Basic constructor
     * 
     * @param array $config
     * @param string $cacheDir
     */
    public function __construct(array $config, $cacheDir) {
        $this->config = $config;
        $this->cacheDir = $cacheDir;
        $this->defineKey();
    }

    /**
     * Defines the key as a constant if one is already not set
     */
    public function defineKey() {
        if (!defined("KMJ_ZILLOW_KEY")) {
            /**
             * The key is used to inject into the requests
             */
            define("KMJ_ZILLOW_KEY", $this->config['key']);
        }

        if (!defined("KMJ_ZILLOW_CACHE_DIR")) {
            $cacheDir = $this->cacheDir . "/zillow";
            @mkdir($cacheDir);
            define("KMJ_ZILLOW_CACHE_DIR", $cacheDir);
        }
    }

}
