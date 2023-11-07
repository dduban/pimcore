<?php

namespace ContainerF3OUZLB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Command_DebugFirewallService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.command.debug_firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Command\DebugFirewallCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Command/DebugFirewallCommand.php';

        $container->privates['security.command.debug_firewall'] = $instance = new \Symfony\Bundle\SecurityBundle\Command\DebugFirewallCommand($container->parameters['security.firewalls'], ($container->privates['.service_locator.uM4t353'] ?? self::get_ServiceLocator_UM4t353Service($container)), ($container->privates['.service_locator.o7Z4kTW'] ?? $container->load('get_ServiceLocator_O7Z4kTWService')), ['pimcore_webdav' => [($container->privates['security.authenticator.http_basic.pimcore_webdav'] ?? $container->load('getSecurity_Authenticator_HttpBasic_PimcoreWebdavService'))], 'pimcore_admin' => [($container->privates['Pimcore\\Bundle\\AdminBundle\\Security\\Authenticator\\AdminTokenAuthenticator'] ?? $container->load('getAdminTokenAuthenticatorService')), ($container->privates['security.authenticator.two_factor.pimcore_admin'] ?? $container->load('getSecurity_Authenticator_TwoFactor_PimcoreAdminService')), ($container->privates['security.authenticator.form_login.pimcore_admin'] ?? $container->load('getSecurity_Authenticator_FormLogin_PimcoreAdminService'))]], false);

        $instance->setName('debug:firewall');
        $instance->setDescription('Display information about your security firewall(s)');

        return $instance;
    }
}
