<?php

namespace ContainerWk8XfVF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPreviewGeneratorInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Model\DataObject\ClassDefinition\PreviewGeneratorInterface' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Service\PreviewGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/models/DataObject/ClassDefinition/PreviewGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/admin-ui-classic-bundle/src/Service/PreviewGenerator.php';

        $container->privates['Pimcore\\Model\\DataObject\\ClassDefinition\\PreviewGeneratorInterface'] = $instance = new \Pimcore\Bundle\AdminBundle\Service\PreviewGenerator();

        $instance->setTranslator(($container->services['Symfony\\Contracts\\Translation\\TranslatorInterface'] ?? self::getTranslatorInterfaceService($container)));

        return $instance;
    }
}
