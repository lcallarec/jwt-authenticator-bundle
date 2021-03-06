<?php

namespace Elce\JWTAuthenticator\Bundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration
 * @package Elce\JWTAuthenticator\Bundle\DependencyInjection
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('elce_jwt_authenticator');

        $rootNode
            ->children()
                ->arrayNode('jwt_secrets')
                    ->prototype('scalar')->end()
                    ->defaultValue([])
                ->end()
                ->scalarNode('jwt_secret')
                    ->defaultNull()
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
