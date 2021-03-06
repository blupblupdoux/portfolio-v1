<?php

namespace Container05bTVvP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJobControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\JobController' shared autowired service.
     *
     * @return \App\Controller\Admin\JobController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Admin/TypeController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Admin/JobController.php';

        $container->services['App\\Controller\\Admin\\JobController'] = $instance = new \App\Controller\Admin\JobController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\Admin\\JobController', $container));

        return $instance;
    }
}
