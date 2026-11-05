<?php

namespace Container1mw2aI5;

include_once \dirname(__DIR__, 3).'/core/backend/Data/Service/Record/RecordSaveHandlers/BaseModuleSaveHandlerInterface.php';
include_once \dirname(__DIR__, 3).'/core/backend/Data/Service/Record/RecordSaveHandlers/RecordFieldTypeSaveHandlerInterface.php';
include_once \dirname(__DIR__, 3).'/core/backend/Module/Service/Fields/Attachments/SaveHandlers/AttachmentFieldSaveHandler.php';
class AttachmentFieldSaveHandlerGhostAbb3dce extends \App\Module\Service\Fields\Attachments\SaveHandlers\AttachmentFieldSaveHandler implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;
    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".'*'."\0".'attachmentsManager' => [parent::class, 'attachmentsManager', null, 8],
        "\0".'*'."\0".'mediaObjectManager' => [parent::class, 'mediaObjectManager', null, 8],
        "\0".'*'."\0".'moduleNameMapper' => [parent::class, 'moduleNameMapper', null, 8],
        'attachmentsManager' => [parent::class, 'attachmentsManager', null, 8],
        'mediaObjectManager' => [parent::class, 'mediaObjectManager', null, 8],
        'moduleNameMapper' => [parent::class, 'moduleNameMapper', null, 8],
    ];
}
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('AttachmentFieldSaveHandlerGhostAbb3dce', false)) {
    \class_alias(__NAMESPACE__.'\\AttachmentFieldSaveHandlerGhostAbb3dce', 'AttachmentFieldSaveHandlerGhostAbb3dce', false);
}
