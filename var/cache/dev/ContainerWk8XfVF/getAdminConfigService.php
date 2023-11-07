<?php

namespace ContainerWk8XfVF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdminConfigService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Bundle\AdminBundle\System\AdminConfig' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\System\AdminConfig
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/admin-ui-classic-bundle/src/System/AdminConfig.php';

        return $container->privates['Pimcore\\Bundle\\AdminBundle\\System\\AdminConfig'] = new \Pimcore\Bundle\AdminBundle\System\AdminConfig();
    }
}
