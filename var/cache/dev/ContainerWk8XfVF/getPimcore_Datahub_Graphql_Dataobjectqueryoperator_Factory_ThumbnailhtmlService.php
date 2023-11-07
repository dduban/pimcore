<?php

namespace ContainerWk8XfVF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimcore_Datahub_Graphql_Dataobjectqueryoperator_Factory_ThumbnailhtmlService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'pimcore.datahub.graphql.dataobjectqueryoperator.factory.thumbnailhtml' shared autowired service.
     *
     * @return \Pimcore\Bundle\DataHubBundle\GraphQL\Query\Operator\Factory\DefaultQueryOperatorFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-hub/src/GraphQL/Query/Operator/Factory/OperatorFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-hub/src/GraphQL/Traits/ServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-hub/src/GraphQL/Query/Operator/Factory/DefaultOperatorFactoryBase.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-hub/src/GraphQL/Query/Operator/Factory/DefaultQueryOperatorFactory.php';

        $a = ($container->services['Pimcore\\Bundle\\DataHubBundle\\GraphQL\\Service'] ?? $container->load('getService3Service'));

        if (isset($container->privates['pimcore.datahub.graphql.dataobjectqueryoperator.factory.thumbnailhtml'])) {
            return $container->privates['pimcore.datahub.graphql.dataobjectqueryoperator.factory.thumbnailhtml'];
        }

        return $container->privates['pimcore.datahub.graphql.dataobjectqueryoperator.factory.thumbnailhtml'] = new \Pimcore\Bundle\DataHubBundle\GraphQL\Query\Operator\Factory\DefaultQueryOperatorFactory($a, 'Pimcore\\Bundle\\DataHubBundle\\GraphQL\\Query\\Operator\\ThumbnailHtml');
    }
}
