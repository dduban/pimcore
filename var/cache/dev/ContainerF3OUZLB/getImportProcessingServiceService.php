<?php

namespace ContainerF3OUZLB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getImportProcessingServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Bundle\DataImporterBundle\Processing\ImportProcessingService' shared autowired service.
     *
     * @return \Pimcore\Bundle\DataImporterBundle\Processing\ImportProcessingService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-importer/src/Processing/ImportProcessingService.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-importer/src/Cleanup/CleanupStrategyFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-importer/src/Cleanup/CleanupStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-importer/src/Cleanup/DeleteStrategy.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-importer/src/Cleanup/UnpublishStrategy.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-importer/src/Queue/QueueService.php';

        $a = ($container->privates['Pimcore\\Bundle\\DataImporterBundle\\Mapping\\MappingConfigurationFactory'] ?? $container->load('getMappingConfigurationFactoryService'));

        if (isset($container->privates['Pimcore\\Bundle\\DataImporterBundle\\Processing\\ImportProcessingService'])) {
            return $container->privates['Pimcore\\Bundle\\DataImporterBundle\\Processing\\ImportProcessingService'];
        }
        $b = ($container->privates['Pimcore\\Bundle\\DataImporterBundle\\Resolver\\ResolverFactory'] ?? $container->load('getResolverFactoryService'));

        if (isset($container->privates['Pimcore\\Bundle\\DataImporterBundle\\Processing\\ImportProcessingService'])) {
            return $container->privates['Pimcore\\Bundle\\DataImporterBundle\\Processing\\ImportProcessingService'];
        }
        $c = ($container->services['Pimcore\\Bundle\\ApplicationLoggerBundle\\ApplicationLogger'] ?? $container->load('getApplicationLoggerService'));

        if (isset($container->privates['Pimcore\\Bundle\\DataImporterBundle\\Processing\\ImportProcessingService'])) {
            return $container->privates['Pimcore\\Bundle\\DataImporterBundle\\Processing\\ImportProcessingService'];
        }
        $d = ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container));

        if (isset($container->privates['Pimcore\\Bundle\\DataImporterBundle\\Processing\\ImportProcessingService'])) {
            return $container->privates['Pimcore\\Bundle\\DataImporterBundle\\Processing\\ImportProcessingService'];
        }

        $container->privates['Pimcore\\Bundle\\DataImporterBundle\\Processing\\ImportProcessingService'] = $instance = new \Pimcore\Bundle\DataImporterBundle\Processing\ImportProcessingService(($container->privates['Pimcore\\Bundle\\DataImporterBundle\\Queue\\QueueService'] ??= new \Pimcore\Bundle\DataImporterBundle\Queue\QueueService()), $a, $b, new \Pimcore\Bundle\DataImporterBundle\Cleanup\CleanupStrategyFactory(['delete' => new \Pimcore\Bundle\DataImporterBundle\Cleanup\DeleteStrategy(), 'unpublish' => new \Pimcore\Bundle\DataImporterBundle\Cleanup\UnpublishStrategy()]), $c, $d);

        $instance->setLogger(($container->services['monolog.logger.DATA-IMPORTER'] ?? $container->load('getMonolog_Logger_DATAIMPORTERService')));

        return $instance;
    }
}
