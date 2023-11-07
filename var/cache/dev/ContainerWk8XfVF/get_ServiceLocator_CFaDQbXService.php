<?php

namespace ContainerWk8XfVF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CFaDQbXService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.cFaDQbX' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.cFaDQbX'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'service' => ['privates', 'Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\Assets', 'getAssetsService', true],
        ], [
            'service' => 'Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\Assets',
        ]);
    }
}
