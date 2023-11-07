<?php

namespace ContainerWk8XfVF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JJKBkz9Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.JJKBkz9' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.JJKBkz9'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'actionRenderer' => ['privates', 'Pimcore\\Templating\\Renderer\\ActionRenderer', 'getActionRendererService', false],
            'editableHandler' => ['services', 'Pimcore\\Document\\Editable\\EditableHandler', 'getEditableHandlerService', true],
            'eventDispatcher' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'localeService' => ['services', 'Pimcore\\Localization\\LocaleServiceInterface', 'getLocaleServiceInterfaceService', false],
        ], [
            'actionRenderer' => 'Pimcore\\Templating\\Renderer\\ActionRenderer',
            'editableHandler' => 'Pimcore\\Document\\Editable\\EditableHandler',
            'eventDispatcher' => '?',
            'localeService' => 'Pimcore\\Localization\\LocaleServiceInterface',
        ]);
    }
}