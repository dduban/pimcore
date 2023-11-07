<?php

namespace ContainerWk8XfVF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGeneratePagePreviews_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.Pimcore\Bundle\CoreBundle\Command\Document\GeneratePagePreviews.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.Pimcore\\Bundle\\CoreBundle\\Command\\Document\\GeneratePagePreviews.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('pimcore:documents:generate-page-previews', [], 'Generates the previews shown in the tree on hover', false, #[\Closure(name: 'Pimcore\\Bundle\\CoreBundle\\Command\\Document\\GeneratePagePreviews')] fn (): \Pimcore\Bundle\CoreBundle\Command\Document\GeneratePagePreviews => ($container->privates['Pimcore\\Bundle\\CoreBundle\\Command\\Document\\GeneratePagePreviews'] ?? $container->load('getGeneratePagePreviewsService')));
    }
}
