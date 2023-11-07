<?php

namespace ContainerF3OUZLB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCronExecutionCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'console.command.public_alias.Pimcore\Bundle\DataImporterBundle\Command\CronExecutionCommand' shared autowired service.
     *
     * @return \Pimcore\Bundle\DataImporterBundle\Command\CronExecutionCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Console/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-importer/src/Command/CronExecutionCommand.php';

        return $container->services['console.command.public_alias.Pimcore\\Bundle\\DataImporterBundle\\Command\\CronExecutionCommand'] = new \Pimcore\Bundle\DataImporterBundle\Command\CronExecutionCommand(($container->privates['Pimcore\\Bundle\\DataImporterBundle\\Processing\\ImportPreparationService'] ?? $container->load('getImportPreparationServiceService')));
    }
}
