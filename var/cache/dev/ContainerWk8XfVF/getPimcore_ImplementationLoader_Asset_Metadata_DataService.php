<?php

namespace ContainerWk8XfVF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimcore_ImplementationLoader_Asset_Metadata_DataService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'pimcore.implementation_loader.asset.metadata.data' shared autowired service.
     *
     * @return \Pimcore\Model\Asset\Metadata\Loader\DataLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Model/Asset/Metadata/Loader/DataLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Model/Asset/Metadata/Loader/DataLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Loader/ImplementationLoader/ClassMapLoader.php';

        return $container->services['pimcore.implementation_loader.asset.metadata.data'] = new \Pimcore\Model\Asset\Metadata\Loader\DataLoader([new \Pimcore\Loader\ImplementationLoader\ClassMapLoader(['asset' => '\\Pimcore\\Model\\Asset\\MetaData\\ClassDefinition\\Data\\Asset', 'checkbox' => '\\Pimcore\\Model\\Asset\\MetaData\\ClassDefinition\\Data\\Checkbox', 'date' => '\\Pimcore\\Model\\Asset\\MetaData\\ClassDefinition\\Data\\Date', 'document' => '\\Pimcore\\Model\\Asset\\MetaData\\ClassDefinition\\Data\\Document', 'input' => '\\Pimcore\\Model\\Asset\\MetaData\\ClassDefinition\\Data\\Input', 'object' => '\\Pimcore\\Model\\Asset\\MetaData\\ClassDefinition\\Data\\DataObject', 'select' => '\\Pimcore\\Model\\Asset\\MetaData\\ClassDefinition\\Data\\Select', 'textarea' => '\\Pimcore\\Model\\Asset\\MetaData\\ClassDefinition\\Data\\Textarea'])]);
    }
}
