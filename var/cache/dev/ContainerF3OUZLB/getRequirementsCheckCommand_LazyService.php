<?php

namespace ContainerF3OUZLB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRequirementsCheckCommand_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.Pimcore\Bundle\CoreBundle\Command\RequirementsCheckCommand.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.Pimcore\\Bundle\\CoreBundle\\Command\\RequirementsCheckCommand.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('pimcore:system:requirements:check', ['system:requirements:check'], 'Check system requirements', false, #[\Closure(name: 'Pimcore\\Bundle\\CoreBundle\\Command\\RequirementsCheckCommand')] fn (): \Pimcore\Bundle\CoreBundle\Command\RequirementsCheckCommand => ($container->privates['Pimcore\\Bundle\\CoreBundle\\Command\\RequirementsCheckCommand'] ?? $container->load('getRequirementsCheckCommandService')));
    }
}
