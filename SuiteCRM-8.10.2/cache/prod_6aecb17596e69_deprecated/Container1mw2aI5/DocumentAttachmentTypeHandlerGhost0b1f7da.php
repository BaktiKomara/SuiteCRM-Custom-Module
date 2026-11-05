<?php

namespace Container1mw2aI5;

include_once \dirname(__DIR__, 3).'/core/backend/Module/Service/Fields/Attachments/AttachmentTypeHandlers/AttachmentTypeHandlerInterface.php';
include_once \dirname(__DIR__, 3).'/core/backend/Module/Service/Fields/Attachments/AttachmentTypeHandlers/DocumentAttachmentTypeHandler.php';
class DocumentAttachmentTypeHandlerGhost0b1f7da extends \App\Module\Service\Fields\Attachments\AttachmentTypeHandlers\DocumentAttachmentTypeHandler implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;
    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".'*'."\0".'defaultSessionName' => [parent::class, 'defaultSessionName', null, 8],
        "\0".'*'."\0".'fieldDefinitionsProvider' => [parent::class, 'fieldDefinitionsProvider', null, 8],
        "\0".'*'."\0".'legacyDir' => [parent::class, 'legacyDir', null, 8],
        "\0".'*'."\0".'legacySessionName' => [parent::class, 'legacySessionName', null, 8],
        "\0".'*'."\0".'logger' => [parent::class, 'logger', null, 8],
        "\0".'*'."\0".'mediaObjectManager' => [parent::class, 'mediaObjectManager', null, 8],
        "\0".'*'."\0".'moduleNameMapper' => [parent::class, 'moduleNameMapper', null, 8],
        "\0".'*'."\0".'projectDir' => [parent::class, 'projectDir', null, 8],
        "\0".'*'."\0".'recordProvider' => [parent::class, 'recordProvider', null, 8],
        "\0".'*'."\0".'requestStack' => [parent::class, 'requestStack', null, 8],
        "\0".'*'."\0".'state' => [parent::class, 'state', null, 8],
        'defaultSessionName' => [parent::class, 'defaultSessionName', null, 8],
        'fieldDefinitionsProvider' => [parent::class, 'fieldDefinitionsProvider', null, 8],
        'legacyDir' => [parent::class, 'legacyDir', null, 8],
        'legacySessionName' => [parent::class, 'legacySessionName', null, 8],
        'logger' => [parent::class, 'logger', null, 8],
        'mediaObjectManager' => [parent::class, 'mediaObjectManager', null, 8],
        'moduleNameMapper' => [parent::class, 'moduleNameMapper', null, 8],
        'projectDir' => [parent::class, 'projectDir', null, 8],
        'recordProvider' => [parent::class, 'recordProvider', null, 8],
        'requestStack' => [parent::class, 'requestStack', null, 8],
        'state' => [parent::class, 'state', null, 8],
    ];
}
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('DocumentAttachmentTypeHandlerGhost0b1f7da', false)) {
    \class_alias(__NAMESPACE__.'\\DocumentAttachmentTypeHandlerGhost0b1f7da', 'DocumentAttachmentTypeHandlerGhost0b1f7da', false);
}
