<?php

namespace ContainerF3OUZLB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMigrateElementsCommand_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.Pimcore\Bundle\CoreBundle\Command\Document\MigrateElementsCommand.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.Pimcore\\Bundle\\CoreBundle\\Command\\Document\\MigrateElementsCommand.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('pimcore:documents:migrate-elements', [], 'Migrates document elements to editables.'."\n".'    See issue https://github.com/pimcore/pimcore/issues/7384 first', false, #[\Closure(name: 'Pimcore\\Bundle\\CoreBundle\\Command\\Document\\MigrateElementsCommand')] fn (): \Pimcore\Bundle\CoreBundle\Command\Document\MigrateElementsCommand => ($container->privates['Pimcore\\Bundle\\CoreBundle\\Command\\Document\\MigrateElementsCommand'] ?? $container->load('getMigrateElementsCommandService')));
    }
}