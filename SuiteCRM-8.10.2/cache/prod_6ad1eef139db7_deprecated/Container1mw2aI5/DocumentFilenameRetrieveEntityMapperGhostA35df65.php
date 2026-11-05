<?php

namespace Container1mw2aI5;

include_once \dirname(__DIR__, 3).'/core/backend/Data/Service/Record/Mappers/BaseModuleMapperInterface.php';
include_once \dirname(__DIR__, 3).'/core/backend/Data/Service/Record/Mappers/BaseFieldTypeMapperInterface.php';
include_once \dirname(__DIR__, 3).'/core/backend/Data/Service/Record/EntityRecordMappers/EntityRecordFieldTypeMapperInterface.php';
include_once \dirname(__DIR__, 3).'/core/modules/Documents/Service/Mappers/DocumentFilenameRetrieveEntityMapper.php';
class DocumentFilenameRetrieveEntityMapperGhostA35df65 extends \App\Module\Documents\Service\Mappers\DocumentFilenameRetrieveEntityMapper implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;
    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".'*'."\0".'fieldDefinitionsProvider' => [parent::class, 'fieldDefinitionsProvider', null, 8],
        "\0".'*'."\0".'mediaObjectManager' => [parent::class, 'mediaObjectManager', null, 8],
        'fieldDefinitionsProvider' => [parent::class, 'fieldDefinitionsProvider', null, 8],
        'mediaObjectManager' => [parent::class, 'mediaObjectManager', null, 8],
    ];
}
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('DocumentFilenameRetrieveEntityMapperGhostA35df65', false)) {
    \class_alias(__NAMESPACE__.'\\DocumentFilenameRetrieveEntityMapperGhostA35df65', 'DocumentFilenameRetrieveEntityMapperGhostA35df65', false);
}
