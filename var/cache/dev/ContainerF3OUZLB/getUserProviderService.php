<?php

namespace ContainerF3OUZLB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserProviderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Pimcore\Security\User\UserProvider' shared autowired service.
     *
     * @return \Pimcore\Security\User\UserProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Security/User/UserProvider.php';

        return $container->services['Pimcore\\Security\\User\\UserProvider'] = new \Pimcore\Security\User\UserProvider();
    }
}
