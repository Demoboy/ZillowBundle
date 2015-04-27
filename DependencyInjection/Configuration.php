<?php

/**
 * This file is part of the KMJZillowBundle
 * @copyright (c) 2014, Kaelin Jacobson
 * @category Requests
 */

namespace KMJ\ZillowBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface {

    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder() {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('kmj_zillow');

        $rootNode->children()
                    ->scalarNode("key")
                        ->isRequired()
                    ->end()
                ->end();

        return $treeBuilder;
    }

}
