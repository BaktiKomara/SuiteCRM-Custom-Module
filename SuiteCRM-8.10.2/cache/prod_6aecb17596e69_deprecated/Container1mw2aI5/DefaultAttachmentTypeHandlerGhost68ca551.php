<?php

namespace Container1mw2aI5;

include_once \dirname(__DIR__, 3).'/core/backend/Module/Service/Fields/Attachments/AttachmentTypeHandlers/AttachmentTypeHandlerInterface.php';
include_once \dirname(__DIR__, 3).'/core/backend/Module/Service/Fields/Attachments/AttachmentTypeHandlers/DefaultAttachmentTypeHandler.php';
class DefaultAttachmentTypeHandlerGhost68ca551 extends \App\Module\Service\Fields\Attachments\AttachmentTypeHandlers\DefaultAttachmentTypeHandler implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;
    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".'*'."\0".'fieldDefinitionsProvider' => [parent::class, 'fieldDefinitionsProvider', null, 8],
        "\0".'*'."\0".'mediaObjectManager' => [parent::class, 'mediaObjectManager', null, 8],
        "\0".'*'."\0".'moduleNameMapper' => [parent::class, 'moduleNameMapper', null, 8],
        'fieldDefinitionsProvider' => [parent::class, 'fieldDefinitionsProvider', null, 8],
        'mediaObjectManager' => [parent::class, 'mediaObjectManager', null, 8],
        'moduleNameMapper' => [parent::class, 'moduleNameMapper', null, 8],
    ];
}
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('DefaultAttachmentTypeHandlerGhost68ca551', false)) {
    \class_alias(__NAMESPACE__.'\\DefaultAttachmentTypeHandlerGhost68ca551', 'DefaultAttachmentTypeHandlerGhost68ca551', false);
}
