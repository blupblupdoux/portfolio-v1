<?php

namespace ContainerXZiPQSI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSchoolTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\SchoolType' shared autowired service.
     *
     * @return \App\Form\SchoolType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/SchoolType.php';

        return $container->privates['App\\Form\\SchoolType'] = new \App\Form\SchoolType();
    }
}
