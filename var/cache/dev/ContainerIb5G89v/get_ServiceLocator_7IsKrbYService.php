<?php

namespace ContainerIb5G89v;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_7IsKrbYService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.7IsKrbY' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.7IsKrbY'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'offer' => ['privates', '.errored..service_locator.7IsKrbY.App\\Entity\\Offer', NULL, 'Cannot autowire service ".service_locator.7IsKrbY": it references class "App\\Entity\\Offer" but no such service exists.'],
        ], [
            'offer' => 'App\\Entity\\Offer',
        ]);
    }
}
