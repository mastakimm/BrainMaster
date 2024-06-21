<?php

namespace ContainerVg0vx7r;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KPV0MsRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.KPV0MsR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.KPV0MsR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'question' => ['privates', '.errored..service_locator.KPV0MsR.App\\Entity\\Question', NULL, 'Cannot autowire service ".service_locator.KPV0MsR": it needs an instance of "App\\Entity\\Question" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'question' => 'App\\Entity\\Question',
        ]);
    }
}
