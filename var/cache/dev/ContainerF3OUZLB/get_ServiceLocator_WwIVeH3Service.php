<?php

namespace ContainerF3OUZLB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WwIVeH3Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.WwIVeH3' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.WwIVeH3'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'event' => ['privates', '.errored..service_locator.WwIVeH3.Symfony\\Component\\HttpKernel\\Event\\ResponseEvent', NULL, 'Cannot autowire service ".service_locator.WwIVeH3": it references class "Symfony\\Component\\HttpKernel\\Event\\ResponseEvent" but no such service exists.'],
        ], [
            'event' => 'Symfony\\Component\\HttpKernel\\Event\\ResponseEvent',
        ]);
    }
}
