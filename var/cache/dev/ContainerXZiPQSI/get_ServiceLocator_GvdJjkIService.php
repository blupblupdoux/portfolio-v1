<?php

namespace ContainerXZiPQSI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GvdJjkIService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.GvdJjkI' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.GvdJjkI'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'projectsRepository' => ['privates', 'App\\Repository\\ProjectRepository', 'getProjectRepositoryService', true],
        ], [
            'projectsRepository' => 'App\\Repository\\ProjectRepository',
        ]);
    }
}
