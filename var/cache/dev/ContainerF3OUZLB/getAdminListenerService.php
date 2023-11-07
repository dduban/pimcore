<?php

namespace ContainerF3OUZLB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdminListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Bundle\DataHubBundle\EventListener\AdminListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\DataHubBundle\EventListener\AdminListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-hub/src/EventListener/AdminListener.php';

        return $container->privates['Pimcore\\Bundle\\DataHubBundle\\EventListener\\AdminListener'] = new \Pimcore\Bundle\DataHubBundle\EventListener\AdminListener($container->parameters['pimcore_data_hub']);
    }
}
