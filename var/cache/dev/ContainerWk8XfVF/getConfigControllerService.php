<?php

namespace ContainerWk8XfVF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConfigControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Pimcore\Bundle\DataHubBundle\Controller\ConfigController' shared autowired service.
     *
     * @return \Pimcore\Bundle\DataHubBundle\Controller\ConfigController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Controller/Controller.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Controller/UserAwareController.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Controller/Traits/JsonHelperTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-hub/src/Controller/ConfigController.php';

        $container->services['Pimcore\\Bundle\\DataHubBundle\\Controller\\ConfigController'] = $instance = new \Pimcore\Bundle\DataHubBundle\Controller\ConfigController();

        $instance->setTokenResolver(($container->services['Pimcore\\Security\\User\\TokenStorageUserResolver'] ?? self::getTokenStorageUserResolverService($container)));
        $instance->setContainer(($container->privates['.service_locator.CgLZdtH'] ?? $container->load('get_ServiceLocator_CgLZdtHService'))->withContext('Pimcore\\Bundle\\DataHubBundle\\Controller\\ConfigController', $container));
        $instance->setPimcoreSerializer(($container->services['Pimcore\\Serializer\\Serializer'] ?? $container->load('getSerializerService')));

        return $instance;
    }
}
