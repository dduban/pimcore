<?php

namespace ContainerF3OUZLB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BdbLnHdService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.BdbLnHd' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.BdbLnHd'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'configurationPreparationService' => ['privates', 'Pimcore\\Bundle\\DataImporterBundle\\Settings\\ConfigurationPreparationService', 'getConfigurationPreparationServiceService', true],
            'factory' => ['privates', 'Pimcore\\Bundle\\DataImporterBundle\\Mapping\\MappingConfigurationFactory', 'getMappingConfigurationFactoryService', true],
            'importProcessingService' => ['privates', 'Pimcore\\Bundle\\DataImporterBundle\\Processing\\ImportProcessingService', 'getImportProcessingServiceService', true],
            'interpreterFactory' => ['privates', 'Pimcore\\Bundle\\DataImporterBundle\\DataSource\\Interpreter\\InterpreterFactory', 'getInterpreterFactoryService', true],
        ], [
            'configurationPreparationService' => 'Pimcore\\Bundle\\DataImporterBundle\\Settings\\ConfigurationPreparationService',
            'factory' => 'Pimcore\\Bundle\\DataImporterBundle\\Mapping\\MappingConfigurationFactory',
            'importProcessingService' => 'Pimcore\\Bundle\\DataImporterBundle\\Processing\\ImportProcessingService',
            'interpreterFactory' => 'Pimcore\\Bundle\\DataImporterBundle\\DataSource\\Interpreter\\InterpreterFactory',
        ]);
    }
}
