<?php

namespace ContainerVg0vx7r;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Nf_XpWvService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Nf.XpWv' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Nf.XpWv'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'reponse' => ['privates', '.errored..service_locator.Nf.XpWv.App\\Entity\\Reponse', NULL, 'Cannot autowire service ".service_locator.Nf.XpWv": it needs an instance of "App\\Entity\\Reponse" but this type has been excluded in "config/services.yaml".'],
        ], [
            'reponse' => 'App\\Entity\\Reponse',
        ]);
    }
}
