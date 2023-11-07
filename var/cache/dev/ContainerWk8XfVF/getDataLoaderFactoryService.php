<?php

namespace ContainerWk8XfVF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDataLoaderFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Bundle\DataImporterBundle\DataSource\Loader\DataLoaderFactory' shared autowired service.
     *
     * @return \Pimcore\Bundle\DataImporterBundle\DataSource\Loader\DataLoaderFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-importer/src/DataSource/Loader/DataLoaderFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-importer/src/Settings/SettingsAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-importer/src/DataSource/Loader/DataLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-importer/src/DataSource/Loader/AssetLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Helper/TemporaryFileHelperTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-importer/src/DataSource/Loader/UploadLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-importer/src/DataSource/Loader/HttpLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-importer/src/DataSource/Loader/SftpLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-importer/src/DataSource/Loader/PushLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/filesystem/Filesystem.php';

        $a = ($container->privates['filesystem'] ??= new \Symfony\Component\Filesystem\Filesystem());

        return $container->privates['Pimcore\\Bundle\\DataImporterBundle\\DataSource\\Loader\\DataLoaderFactory'] = new \Pimcore\Bundle\DataImporterBundle\DataSource\Loader\DataLoaderFactory(['asset' => new \Pimcore\Bundle\DataImporterBundle\DataSource\Loader\AssetLoader(), 'upload' => new \Pimcore\Bundle\DataImporterBundle\DataSource\Loader\UploadLoader(($container->privates['pimcore.dataImporter.upload.storage'] ?? $container->load('getPimcore_DataImporter_Upload_StorageService'))), 'http' => new \Pimcore\Bundle\DataImporterBundle\DataSource\Loader\HttpLoader($a), 'sftp' => new \Pimcore\Bundle\DataImporterBundle\DataSource\Loader\SftpLoader($a), 'push' => new \Pimcore\Bundle\DataImporterBundle\DataSource\Loader\PushLoader($a)]);
    }
}
