<?php

namespace ContainerWk8XfVF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DMYTyfyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.DMYTyfy' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.DMYTyfy'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'config' => ['services', 'Pimcore\\Config', 'getConfigService', false],
            'twoFactor' => ['services', 'scheb_two_factor.security.google_authenticator', 'getSchebTwoFactor_Security_GoogleAuthenticatorService', true],
        ], [
            'config' => 'Pimcore\\Config',
            'twoFactor' => '?',
        ]);
    }
}