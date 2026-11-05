<?php

namespace Container1mw2aI5;

include_once \dirname(__DIR__, 3).'/core/backend/Data/Service/Record/Mappers/BaseModuleMapperInterface.php';
include_once \dirname(__DIR__, 3).'/core/backend/Data/Service/Record/Mappers/BaseFieldMapperInterface.php';
include_once \dirname(__DIR__, 3).'/core/backend/Data/Service/Record/ApiRecordMappers/ApiRecordFieldMapperInterface.php';
include_once \dirname(__DIR__, 3).'/core/modules/Documents/Service/Mappers/DocumentRevisionRetrieveMapper.php';
class DocumentRevisionRetrieveMapperGhost096f199 extends \App\Module\Documents\Service\Mappers\DocumentRevisionRetrieveMapper implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;
    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".'*'."\0".'documentsManager' => [parent::class, 'documentsManager', null, 8],
        "\0".'*'."\0".'fieldDefinitionsProvider' => [parent::class, 'fieldDefinitionsProvider', null, 8],
        'documentsManager' => [parent::class, 'documentsManager', null, 8],
        'fieldDefinitionsProvider' => [parent::class, 'fieldDefinitionsProvider', null, 8],
    ];
}
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('DocumentRevisionRetrieveMapperGhost096f199', false)) {
    \class_alias(__NAMESPACE__.'\\DocumentRevisionRetrieveMapperGhost096f199', 'DocumentRevisionRetrieveMapperGhost096f199', false);
}
