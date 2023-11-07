<?php

namespace ContainerF3OUZLB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCmfRouting_Validator_RouteDefaultsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'cmf_routing.validator.route_defaults' shared service.
     *
     * @return \Symfony\Cmf\Bundle\RoutingBundle\Validator\Constraints\RouteDefaultsTwigValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony-cmf/routing-bundle/src/Validator/Constraints/RouteDefaultsTwigValidator.php';

        return $container->privates['cmf_routing.validator.route_defaults'] = new \Symfony\Cmf\Bundle\RoutingBundle\Validator\Constraints\RouteDefaultsTwigValidator(($container->privates['debug.controller_resolver'] ?? self::getDebug_ControllerResolverService($container)), ($container->privates['twig.loader.native_filesystem'] ?? self::getTwig_Loader_NativeFilesystemService($container)));
    }
}
