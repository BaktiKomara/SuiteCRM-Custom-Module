<?php

namespace Container1mw2aI5;

include_once \dirname(__DIR__, 3).'/core/backend/Data/Service/Record/Mappers/BaseModuleMapperInterface.php';
include_once \dirname(__DIR__, 3).'/core/backend/Data/Service/Record/Mappers/BaseRecordMapperInterface.php';
include_once \dirname(__DIR__, 3).'/core/backend/Data/Service/Record/ApiRecordMappers/ApiRecordMapperInterface.php';
include_once \dirname(__DIR__, 3).'/core/modules/DocumentRevisions/Service/Record/DocumentRevisionUnlinkMapper.php';
class DocumentRevisionUnlinkMapperGhost3097970 extends \App\Module\DocumentRevisions\Service\Record\DocumentRevisionUnlinkMapper implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;
    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".'*'."\0".'documentsManager' => [parent::class, 'documentsManager', null, 8],
        "\0".'*'."\0".'systemConfigProvider' => [parent::class, 'systemConfigProvider', null, 8],
        'documentsManager' => [parent::class, 'documentsManager', null, 8],
        'systemConfigProvider' => [parent::class, 'systemConfigProvider', null, 8],
    ];
}
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('DocumentRevisionUnlinkMapperGhost3097970', false)) {
    \class_alias(__NAMESPACE__.'\\DocumentRevisionUnlinkMapperGhost3097970', 'DocumentRevisionUnlinkMapperGhost3097970', false);
}
