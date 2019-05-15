<?php

declare(strict_types=1);

namespace MyComponent;

use Keboola\Component\Config\BaseConfigDefinition;
use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;

class ConfigDefinition extends BaseConfigDefinition
{
    protected function getParametersDefinition(): ArrayNodeDefinition
    {
        $parametersNode = parent::getParametersDefinition();
        // @formatter:off
        /** @noinspection NullPointerExceptionInspection */
	    $parametersNode
		    ->children()
		    ->scalarNode('host')->isRequired()->cannotBeEmpty()->end()
		    ->scalarNode('key')->isRequired()->cannotBeEmpty()->end()
		    ->scalarNode('country')->isRequired()->cannotBeEmpty()->end()
		    ->scalarNode('transport')->cannotBeEmpty()->end()
		    ->end();

        // @formatter:on
        return $parametersNode;
    }
}
