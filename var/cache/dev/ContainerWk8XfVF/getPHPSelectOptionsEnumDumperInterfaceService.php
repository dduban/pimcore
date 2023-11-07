<?php

namespace ContainerWk8XfVF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPHPSelectOptionsEnumDumperInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Pimcore\DataObject\ClassBuilder\PHPSelectOptionsEnumDumperInterface' shared autowired service.
     *
     * @return \Pimcore\DataObject\ClassBuilder\PHPSelectOptionsEnumDumper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/DataObject/ClassBuilder/PHPSelectOptionsEnumDumperInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/DataObject/ClassBuilder/PHPSelectOptionsEnumDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/DataObject/ClassBuilder/SelectOptionsEnumBuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/DataObject/ClassBuilder/SelectOptionsEnumBuilder.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/filesystem/Filesystem.php';

        return $container->services['Pimcore\\DataObject\\ClassBuilder\\PHPSelectOptionsEnumDumperInterface'] = new \Pimcore\DataObject\ClassBuilder\PHPSelectOptionsEnumDumper(new \Pimcore\DataObject\ClassBuilder\SelectOptionsEnumBuilder(), ($container->privates['filesystem'] ??= new \Symfony\Component\Filesystem\Filesystem()));
    }
}
