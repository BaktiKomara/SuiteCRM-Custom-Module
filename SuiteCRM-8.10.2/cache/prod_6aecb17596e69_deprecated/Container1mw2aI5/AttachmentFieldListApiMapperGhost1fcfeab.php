<?php

namespace Container1mw2aI5;

include_once \dirname(__DIR__, 3).'/core/backend/Data/Service/Record/Mappers/BaseModuleMapperInterface.php';
include_once \dirname(__DIR__, 3).'/core/backend/Data/Service/Record/Mappers/BaseFieldTypeMapperInterface.php';
include_once \dirname(__DIR__, 3).'/core/backend/Data/Service/Record/ApiRecordMappers/ApiRecordFieldTypeMapperInterface.php';
include_once \dirname(__DIR__, 3).'/core/backend/Module/Service/Fields/Attachments/Mappers/AttachmentFieldApiMapperTrait.php';
include_once \dirname(__DIR__, 3).'/core/backend/Module/Service/Fields/Attachments/Mappers/AttachmentFieldListApiMapper.php';
class AttachmentFieldListApiMapperGhost1fcfeab extends \App\Module\Service\Fields\Attachments\Mappers\AttachmentFieldListApiMapper implements \Symfony\Component\VarExporter\LazyObjectInterface
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

if (!\class_exists('AttachmentFieldListApiMapperGhost1fcfeab', false)) {
    \class_alias(__NAMESPACE__.'\\AttachmentFieldListApiMapperGhost1fcfeab', 'AttachmentFieldListApiMapperGhost1fcfeab', false);
}
