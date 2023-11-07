<?php

namespace ContainerF3OUZLB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaintenanceModeCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Bundle\CoreBundle\Command\MaintenanceModeCommand' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\Command\MaintenanceModeCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Console/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/CoreBundle/src/Command/MaintenanceModeCommand.php';

        $container->privates['Pimcore\\Bundle\\CoreBundle\\Command\\MaintenanceModeCommand'] = $instance = new \Pimcore\Bundle\CoreBundle\Command\MaintenanceModeCommand(($container->services['Pimcore\\Tool\\MaintenanceModeHelperInterface'] ?? self::getMaintenanceModeHelperInterfaceService($container)));

        $instance->setName('pimcore:maintenance-mode');
        $instance->setDescription('Enable or disable maintenance mode');

        return $instance;
    }
}
