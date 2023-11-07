<?php

namespace ContainerF3OUZLB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getClassesRebuildCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Bundle\CoreBundle\Command\ClassesRebuildCommand' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\Command\ClassesRebuildCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Console/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/CoreBundle/src/Command/ClassesRebuildCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Model/DataObject/ClassDefinition/ClassDefinitionManager.php';

        $container->privates['Pimcore\\Bundle\\CoreBundle\\Command\\ClassesRebuildCommand'] = $instance = new \Pimcore\Bundle\CoreBundle\Command\ClassesRebuildCommand();

        $instance->setClassDefinitionManager(($container->services['Pimcore\\Model\\DataObject\\ClassDefinition\\ClassDefinitionManager'] ??= new \Pimcore\Model\DataObject\ClassDefinition\ClassDefinitionManager()));
        $instance->setName('pimcore:deployment:classes-rebuild');
        $instance->setDescription('rebuilds db structure for classes, field collections and object bricks'."\n".'    based on updated var/classes/definition_*.php files');

        return $instance;
    }
}
