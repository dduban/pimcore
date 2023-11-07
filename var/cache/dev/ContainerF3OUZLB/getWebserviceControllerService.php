<?php

namespace ContainerF3OUZLB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWebserviceControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Pimcore\Bundle\DataHubBundle\Controller\WebserviceController' shared autowired service.
     *
     * @return \Pimcore\Bundle\DataHubBundle\Controller\WebserviceController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Controller/Controller.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Controller/FrontendController.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-hub/src/Controller/WebserviceController.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-hub/src/Service/CheckConsumerPermissionsService.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-hub/src/Service/FileUploadService.php';

        $container->services['Pimcore\\Bundle\\DataHubBundle\\Controller\\WebserviceController'] = $instance = new \Pimcore\Bundle\DataHubBundle\Controller\WebserviceController(($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container)), ($container->services['Pimcore\\Bundle\\DataHubBundle\\Service\\CheckConsumerPermissionsService'] ??= new \Pimcore\Bundle\DataHubBundle\Service\CheckConsumerPermissionsService()), ($container->services['Pimcore\\Bundle\\DataHubBundle\\Service\\OutputCacheService'] ?? $container->load('getOutputCacheServiceService')), ($container->services['Pimcore\\Bundle\\DataHubBundle\\Service\\FileUploadService'] ??= new \Pimcore\Bundle\DataHubBundle\Service\FileUploadService()));

        $instance->setContainer(($container->privates['.service_locator.jIByowl'] ?? $container->load('get_ServiceLocator_JIByowlService'))->withContext('Pimcore\\Bundle\\DataHubBundle\\Controller\\WebserviceController', $container));

        return $instance;
    }
}
