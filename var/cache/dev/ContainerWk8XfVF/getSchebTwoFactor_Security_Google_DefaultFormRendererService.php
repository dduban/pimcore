<?php

namespace ContainerWk8XfVF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSchebTwoFactor_Security_Google_DefaultFormRendererService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'scheb_two_factor.security.google.default_form_renderer' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Security\TwoFactor\Provider\DefaultTwoFactorFormRenderer
     */
    public static function do($container, $lazyLoad = true)
    {
        if (true === $lazyLoad) {
            return $container->privates['scheb_two_factor.security.google.default_form_renderer'] = $container->createProxy('DefaultTwoFactorFormRendererGhost3f31ba7', static fn () => \DefaultTwoFactorFormRendererGhost3f31ba7::createLazyGhost(static fn ($proxy) => self::do($container, $proxy)));
        }

        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Provider/TwoFactorFormRendererInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Provider/DefaultTwoFactorFormRenderer.php';

        return ($lazyLoad->__construct(($container->privates['twig'] ?? self::getTwigService($container)), '@SchebTwoFactor/Authentication/form.html.twig') && false ?: $lazyLoad);
    }
}
