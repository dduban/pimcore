<?php

namespace ContainerWk8XfVF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPushImportControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Pimcore\Bundle\DataImporterBundle\Controller\PushImportController' shared autowired service.
     *
     * @return \Pimcore\Bundle\DataImporterBundle\Controller\PushImportController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-importer/src/Controller/PushImportController.php';

        return $container->services['Pimcore\\Bundle\\DataImporterBundle\\Controller\\PushImportController'] = new \Pimcore\Bundle\DataImporterBundle\Controller\PushImportController();
    }
}