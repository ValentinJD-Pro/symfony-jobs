<?php

namespace ContainerIb5G89v;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJobControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\JobController' shared autowired service.
     *
     * @return \App\Controller\JobController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'JobController.php';

        $container->services['App\\Controller\\JobController'] = $instance = new \App\Controller\JobController();

        $instance->setContainer(($container->privates['.service_locator.t7fOm1P'] ?? $container->load('get_ServiceLocator_T7fOm1PService'))->withContext('App\\Controller\\JobController', $container));

        return $instance;
    }
}
