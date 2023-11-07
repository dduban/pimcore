<?php

namespace ContainerWk8XfVF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Migrations_ConfigurationService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine.migrations.configuration' shared service.
     *
     * @return \Doctrine\Migrations\Configuration\Configuration
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/Configuration.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Metadata/Storage/MetadataStorageConfiguration.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Metadata/Storage/TableMetadataStorageConfiguration.php';

        $container->privates['doctrine.migrations.configuration'] = $instance = new \Doctrine\Migrations\Configuration\Configuration();

        $a = new \Doctrine\Migrations\Metadata\Storage\TableMetadataStorageConfiguration();
        $a->setTableName('migration_versions');
        $a->setVersionColumnName('version');
        $a->setVersionColumnLength(1024);
        $a->setExecutedAtColumnName('executed_at');
        $a->setExecutionTimeColumnName('execution_time');

        $instance->addMigrationsDirectory('Pimcore\\Bundle\\CoreBundle\\Migrations', (\dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/CoreBundle/src/Migrations'));
        $instance->addMigrationsDirectory('Pimcore\\Bundle\\DataHubBundle\\Migrations\\PimcoreX', (\dirname(__DIR__, 4).'/vendor/pimcore/data-hub/src/Migrations/PimcoreX'));
        $instance->addMigrationsDirectory('Pimcore\\Bundle\\DataImporterBundle\\Migrations', (\dirname(__DIR__, 4).'/vendor/pimcore/data-importer/src/Migrations'));
        $instance->setAllOrNothing(false);
        $instance->setCheckDatabasePlatform(false);
        $instance->setTransactional(true);
        $instance->setMetadataStorageConfiguration($a);

        return $instance;
    }
}
