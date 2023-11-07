<?php

namespace ContainerF3OUZLB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_S0qA2opService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.s0qA2op' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.s0qA2op'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'pimcore.admin.storage' => ['privates', 'pimcore.admin.storage', 'getPimcore_Admin_StorageService', true],
            'pimcore.application_log.storage' => ['privates', 'pimcore.application_log.storage', 'getPimcore_ApplicationLog_StorageService', true],
            'pimcore.asset.storage' => ['privates', 'pimcore.asset.storage', 'getPimcore_Asset_StorageService', true],
            'pimcore.asset_cache.storage' => ['privates', 'pimcore.asset_cache.storage', 'getPimcore_AssetCache_StorageService', true],
            'pimcore.dataImporter.preview.storage' => ['privates', 'pimcore.dataImporter.preview.storage', 'getPimcore_DataImporter_Preview_StorageService', true],
            'pimcore.dataImporter.upload.storage' => ['privates', 'pimcore.dataImporter.upload.storage', 'getPimcore_DataImporter_Upload_StorageService', true],
            'pimcore.document_static.storage' => ['privates', 'pimcore.document_static.storage', 'getPimcore_DocumentStatic_StorageService', true],
            'pimcore.email_log.storage' => ['privates', 'pimcore.email_log.storage', 'getPimcore_EmailLog_StorageService', true],
            'pimcore.recycle_bin.storage' => ['privates', 'pimcore.recycle_bin.storage', 'getPimcore_RecycleBin_StorageService', true],
            'pimcore.temp.storage' => ['privates', 'pimcore.temp.storage', 'getPimcore_Temp_StorageService', true],
            'pimcore.thumbnail.storage' => ['privates', 'pimcore.thumbnail.storage', 'getPimcore_Thumbnail_StorageService', true],
            'pimcore.version.storage' => ['privates', 'pimcore.version.storage', 'getPimcore_Version_StorageService', true],
        ], [
            'pimcore.admin.storage' => 'League\\Flysystem\\Filesystem',
            'pimcore.application_log.storage' => 'League\\Flysystem\\Filesystem',
            'pimcore.asset.storage' => 'League\\Flysystem\\Filesystem',
            'pimcore.asset_cache.storage' => 'League\\Flysystem\\Filesystem',
            'pimcore.dataImporter.preview.storage' => 'League\\Flysystem\\Filesystem',
            'pimcore.dataImporter.upload.storage' => 'League\\Flysystem\\Filesystem',
            'pimcore.document_static.storage' => 'League\\Flysystem\\Filesystem',
            'pimcore.email_log.storage' => 'League\\Flysystem\\Filesystem',
            'pimcore.recycle_bin.storage' => 'League\\Flysystem\\Filesystem',
            'pimcore.temp.storage' => 'League\\Flysystem\\Filesystem',
            'pimcore.thumbnail.storage' => 'League\\Flysystem\\Filesystem',
            'pimcore.version.storage' => 'League\\Flysystem\\Filesystem',
        ]);
    }
}
