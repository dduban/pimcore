<?php

namespace ContainerF3OUZLB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BJH6cAQService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.bJH6cAQ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.bJH6cAQ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'eventDispatcher' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'graphQlService' => ['services', 'Pimcore\\Bundle\\DataHubBundle\\GraphQL\\Service', 'getService3Service', true],
        ], [
            'eventDispatcher' => '?',
            'graphQlService' => 'Pimcore\\Bundle\\DataHubBundle\\GraphQL\\Service',
        ]);
    }
}
