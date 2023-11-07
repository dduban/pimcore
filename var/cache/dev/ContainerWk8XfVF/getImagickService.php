<?php

namespace ContainerWk8XfVF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getImagickService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Pimcore\Image\Adapter\Imagick' autowired service.
     *
     * @return \Pimcore\Image\Adapter\Imagick
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Image/Adapter.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Image/Adapter/Imagick.php';

        $container->factories['Pimcore\\Image\\Adapter\\Imagick'] = function ($container) {
            return new \Pimcore\Image\Adapter\Imagick();
        };

        return $container->factories['Pimcore\\Image\\Adapter\\Imagick']($container);
    }
}
