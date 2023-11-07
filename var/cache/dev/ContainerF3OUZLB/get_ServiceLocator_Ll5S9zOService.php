<?php

namespace ContainerF3OUZLB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ll5S9zOService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Ll5S9zO' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Ll5S9zO'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'manager' => ['services', 'Pimcore\\Workflow\\Manager', 'getManagerService', true],
            'workflowRegistry' => ['privates', 'workflow.registry', 'getWorkflow_RegistryService', true],
        ], [
            'manager' => 'Pimcore\\Workflow\\Manager',
            'workflowRegistry' => '?',
        ]);
    }
}
