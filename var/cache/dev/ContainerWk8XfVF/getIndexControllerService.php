<?php

namespace ContainerWk8XfVF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getIndexControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Pimcore\Bundle\AdminBundle\Controller\Admin\IndexController' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Controller\Admin\IndexController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Controller/Controller.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Controller/UserAwareController.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Controller/Traits/JsonHelperTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/admin-ui-classic-bundle/src/Controller/AdminAbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Controller/KernelResponseEventInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/admin-ui-classic-bundle/src/Controller/Admin/IndexController.php';

        $container->services['Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\IndexController'] = $instance = new \Pimcore\Bundle\AdminBundle\Controller\Admin\IndexController(($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container)), ($container->services['Symfony\\Contracts\\Translation\\TranslatorInterface'] ?? self::getTranslatorInterfaceService($container)));

        $instance->setTokenResolver(($container->services['Pimcore\\Security\\User\\TokenStorageUserResolver'] ?? self::getTokenStorageUserResolverService($container)));
        $instance->setContainer(($container->privates['.service_locator.CgLZdtH'] ?? $container->load('get_ServiceLocator_CgLZdtHService'))->withContext('Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\IndexController', $container));
        $instance->setPimcoreSerializer(($container->services['Pimcore\\Serializer\\Serializer'] ?? $container->load('getSerializerService')));

        return $instance;
    }
}
