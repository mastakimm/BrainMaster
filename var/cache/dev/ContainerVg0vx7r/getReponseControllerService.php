<?php

namespace ContainerVg0vx7r;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReponseControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ReponseController' shared autowired service.
     *
     * @return \App\Controller\ReponseController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ReponseController.php';

        $container->services['App\\Controller\\ReponseController'] = $instance = new \App\Controller\ReponseController();

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Controller\\ReponseController', $container));

        return $instance;
    }
}
