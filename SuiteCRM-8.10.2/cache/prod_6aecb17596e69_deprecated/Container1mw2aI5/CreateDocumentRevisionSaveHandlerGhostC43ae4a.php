<?php

namespace Container1mw2aI5;

include_once \dirname(__DIR__, 3).'/core/backend/Data/Service/Record/RecordSaveHandlers/BaseModuleSaveHandlerInterface.php';
include_once \dirname(__DIR__, 3).'/core/backend/Data/Service/Record/RecordSaveHandlers/RecordFieldSaveHandlerInterface.php';
include_once \dirname(__DIR__, 3).'/core/modules/Documents/Service/SaveHandlers/CreateDocumentRevisionSaveHandler.php';
class CreateDocumentRevisionSaveHandlerGhostC43ae4a extends \App\Module\Documents\Service\SaveHandlers\CreateDocumentRevisionSaveHandler implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;
    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".'*'."\0".'documentsManager' => [parent::class, 'documentsManager', null, 8],
        "\0".'*'."\0".'fieldDefinitionsProvider' => [parent::class, 'fieldDefinitionsProvider', null, 8],
        "\0".'*'."\0".'mediaObjectManager' => [parent::class, 'mediaObjectManager', null, 8],
        "\0".'*'."\0".'recordProvider' => [parent::class, 'recordProvider', null, 8],
        'documentsManager' => [parent::class, 'documentsManager', null, 8],
        'fieldDefinitionsProvider' => [parent::class, 'fieldDefinitionsProvider', null, 8],
        'mediaObjectManager' => [parent::class, 'mediaObjectManager', null, 8],
        'recordProvider' => [parent::class, 'recordProvider', null, 8],
    ];
}
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('CreateDocumentRevisionSaveHandlerGhostC43ae4a', false)) {
    \class_alias(__NAMESPACE__.'\\CreateDocumentRevisionSaveHandlerGhostC43ae4a', 'CreateDocumentRevisionSaveHandlerGhostC43ae4a', false);
}
