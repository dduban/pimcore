<?php

namespace ContainerF3OUZLB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConfigurationEventSubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Bundle\DataImporterBundle\EventListener\ConfigurationEventSubscriber' shared autowired service.
     *
     * @return \Pimcore\Bundle\DataImporterBundle\EventListener\ConfigurationEventSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-importer/src/EventListener/ConfigurationEventSubscriber.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-importer/src/Queue/QueueService.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-importer/src/Processing/ExecutionService.php';

        $a = ($container->privates['Pimcore\\Bundle\\DataImporterBundle\\DataSource\\Interpreter\\DeltaChecker\\DeltaChecker'] ?? $container->load('getDeltaCheckerService'));

        if (isset($container->privates['Pimcore\\Bundle\\DataImporterBundle\\EventListener\\ConfigurationEventSubscriber'])) {
            return $container->privates['Pimcore\\Bundle\\DataImporterBundle\\EventListener\\ConfigurationEventSubscriber'];
        }

        return $container->privates['Pimcore\\Bundle\\DataImporterBundle\\EventListener\\ConfigurationEventSubscriber'] = new \Pimcore\Bundle\DataImporterBundle\EventListener\ConfigurationEventSubscriber($a, ($container->privates['Pimcore\\Bundle\\DataImporterBundle\\Queue\\QueueService'] ??= new \Pimcore\Bundle\DataImporterBundle\Queue\QueueService()), ($container->privates['Pimcore\\Bundle\\DataImporterBundle\\Processing\\ExecutionService'] ??= new \Pimcore\Bundle\DataImporterBundle\Processing\ExecutionService()), ($container->privates['pimcore.dataImporter.upload.storage'] ?? $container->load('getPimcore_DataImporter_Upload_StorageService')), ($container->privates['pimcore.dataImporter.preview.storage'] ?? $container->load('getPimcore_DataImporter_Preview_StorageService')));
    }
}
