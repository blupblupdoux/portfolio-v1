<?php

namespace Container05bTVvP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_9vvZCTmService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.9vvZCTm' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.9vvZCTm'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'tag' => ['privates', '.errored..service_locator.9vvZCTm.App\\Entity\\Tag', NULL, 'Cannot autowire service ".service_locator.9vvZCTm": it references class "App\\Entity\\Tag" but no such service exists.'],
        ], [
            'tag' => 'App\\Entity\\Tag',
        ]);
    }
}
