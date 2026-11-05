<?php

namespace Container1mw2aI5;

include_once \dirname(__DIR__, 3).'/core/backend/Module/Service/Fields/Attachments/AttachmentTypeHandlers/AttachmentTypeHandlers.php';
class AttachmentTypeHandlersGhost113d89c extends \App\Module\Service\Fields\Attachments\AttachmentTypeHandlers\AttachmentTypeHandlers implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;
    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".'*'."\0".'registry' => [parent::class, 'registry', null, 8],
        'registry' => [parent::class, 'registry', null, 8],
    ];
}
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('AttachmentTypeHandlersGhost113d89c', false)) {
    \class_alias(__NAMESPACE__.'\\AttachmentTypeHandlersGhost113d89c', 'AttachmentTypeHandlersGhost113d89c', false);
}
