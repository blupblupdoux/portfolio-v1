<?php

namespace Container05bTVvP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KkRJk2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.KkRJk_2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.KkRJk_2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'jobRepository' => ['privates', 'App\\Repository\\JobRepository', 'getJobRepositoryService', true],
            'schoolRepository' => ['privates', 'App\\Repository\\SchoolRepository', 'getSchoolRepositoryService', true],
        ], [
            'jobRepository' => 'App\\Repository\\JobRepository',
            'schoolRepository' => 'App\\Repository\\SchoolRepository',
        ]);
    }
}
