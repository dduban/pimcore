<?php

namespace ContainerWk8XfVF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimcore_Datahub_Graphql_Generaltype_Factory_AssetEmbeddedmetainfoitemService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'pimcore.datahub.graphql.generaltype.factory.asset_embeddedmetainfoitem' shared autowired service.
     *
     * @return \Pimcore\Bundle\DataHubBundle\GraphQL\GeneralTypeFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-hub/src/GraphQL/Traits/ServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-hub/src/GraphQL/GeneralTypeFactory.php';

        $a = ($container->services['Pimcore\\Bundle\\DataHubBundle\\GraphQL\\Service'] ?? $container->load('getService3Service'));

        if (isset($container->privates['pimcore.datahub.graphql.generaltype.factory.asset_embeddedmetainfoitem'])) {
            return $container->privates['pimcore.datahub.graphql.generaltype.factory.asset_embeddedmetainfoitem'];
        }

        return $container->privates['pimcore.datahub.graphql.generaltype.factory.asset_embeddedmetainfoitem'] = new \Pimcore\Bundle\DataHubBundle\GraphQL\GeneralTypeFactory($a, 'Pimcore\\Bundle\\DataHubBundle\\GraphQL\\AssetType\\AssetEmbeddedMetaInfoItem');
    }
}
