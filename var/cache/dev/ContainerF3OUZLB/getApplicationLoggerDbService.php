<?php

namespace ContainerF3OUZLB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApplicationLoggerDbService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Pimcore\Bundle\ApplicationLoggerBundle\Handler\ApplicationLoggerDb' shared autowired service.
     *
     * @return \Pimcore\Bundle\ApplicationLoggerBundle\Handler\ApplicationLoggerDb
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/ApplicationLoggerBundle/src/Handler/ApplicationLoggerDb.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/ApplicationLoggerBundle/src/Processor/ApplicationLoggerProcessor.php';
        include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Processor/IntrospectionProcessor.php';

        $a = ($container->services['doctrine.dbal.default_connection'] ?? self::getDoctrine_Dbal_DefaultConnectionService($container));

        if (isset($container->services['Pimcore\\Bundle\\ApplicationLoggerBundle\\Handler\\ApplicationLoggerDb'])) {
            return $container->services['Pimcore\\Bundle\\ApplicationLoggerBundle\\Handler\\ApplicationLoggerDb'];
        }

        $container->services['Pimcore\\Bundle\\ApplicationLoggerBundle\\Handler\\ApplicationLoggerDb'] = $instance = new \Pimcore\Bundle\ApplicationLoggerBundle\Handler\ApplicationLoggerDb($a);

        $instance->pushProcessor(($container->privates['monolog.processor.psr_log_message'] ??= new \Monolog\Processor\PsrLogMessageProcessor()));
        $instance->pushProcessor(new \Pimcore\Bundle\ApplicationLoggerBundle\Processor\ApplicationLoggerProcessor());
        $instance->pushProcessor(new \Monolog\Processor\IntrospectionProcessor('DEBUG', ['Pimcore\\Bundle\\ApplicationLoggerBundle\\ApplicationLogger']));

        return $instance;
    }
}
