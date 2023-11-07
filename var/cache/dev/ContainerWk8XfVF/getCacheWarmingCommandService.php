<?php

namespace ContainerWk8XfVF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCacheWarmingCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Bundle\CoreBundle\Command\CacheWarmingCommand' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\Command\CacheWarmingCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Console/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/CoreBundle/src/Command/CacheWarmingCommand.php';

        $container->privates['Pimcore\\Bundle\\CoreBundle\\Command\\CacheWarmingCommand'] = $instance = new \Pimcore\Bundle\CoreBundle\Command\CacheWarmingCommand();

        $instance->setName('pimcore:cache:warming');
        $instance->setDescription('Warm up caches');

        return $instance;
    }
}
