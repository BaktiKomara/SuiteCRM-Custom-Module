<?php

namespace Container1mw2aI5;

include_once \dirname(__DIR__, 3).'/core/backend/Data/Service/Record/RecordDeleteHandlers/BaseModuleDeleteHandlerInterface.php';
include_once \dirname(__DIR__, 3).'/core/backend/Data/Service/Record/RecordDeleteHandlers/RecordFieldTypeDeleteHandlerInterface.php';
include_once \dirname(__DIR__, 3).'/core/backend/Module/Service/Fields/File/DeleteHandlers/FileFieldSoftDeleteHandler.php';
class FileFieldSoftDeleteHandlerGhost0f62add extends \App\Module\Service\Fields\File\DeleteHandlers\FileFieldSoftDeleteHandler implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;
    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".'*'."\0".'mediaObjectManager' => [parent::class, 'mediaObjectManager', null, 8],
        "\0".'*'."\0".'moduleNameMapper' => [parent::class, 'moduleNameMapper', null, 8],
        'mediaObjectManager' => [parent::class, 'mediaObjectManager', null, 8],
        'moduleNameMapper' => [parent::class, 'moduleNameMapper', null, 8],
    ];
}
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('FileFieldSoftDeleteHandlerGhost0f62add', false)) {
    \class_alias(__NAMESPACE__.'\\FileFieldSoftDeleteHandlerGhost0f62add', 'FileFieldSoftDeleteHandlerGhost0f62add', false);
}
