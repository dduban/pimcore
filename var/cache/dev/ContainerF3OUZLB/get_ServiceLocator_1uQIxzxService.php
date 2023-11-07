<?php

namespace ContainerF3OUZLB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_1uQIxzxService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.1uQIxzx' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1uQIxzx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'importProcessingService' => ['privates', 'Pimcore\\Bundle\\DataImporterBundle\\Processing\\ImportProcessingService', 'getImportProcessingServiceService', true],
        ], [
            'importProcessingService' => 'Pimcore\\Bundle\\DataImporterBundle\\Processing\\ImportProcessingService',
        ]);
    }
}
