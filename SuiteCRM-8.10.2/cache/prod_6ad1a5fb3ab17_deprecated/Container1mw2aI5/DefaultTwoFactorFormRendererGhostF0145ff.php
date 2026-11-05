<?php

namespace Container1mw2aI5;

include_once \dirname(__DIR__, 3).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Provider/TwoFactorFormRendererInterface.php';
include_once \dirname(__DIR__, 3).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Provider/DefaultTwoFactorFormRenderer.php';
class DefaultTwoFactorFormRendererGhostF0145ff extends \Scheb\TwoFactorBundle\Security\TwoFactor\Provider\DefaultTwoFactorFormRenderer implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;
    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'template' => [parent::class, 'template', null, 16],
        "\0".parent::class."\0".'templateVars' => [parent::class, 'templateVars', null, 16],
        "\0".parent::class."\0".'twigEnvironment' => [parent::class, 'twigEnvironment', null, 16],
        'template' => [parent::class, 'template', null, 16],
        'templateVars' => [parent::class, 'templateVars', null, 16],
        'twigEnvironment' => [parent::class, 'twigEnvironment', null, 16],
    ];
}
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('DefaultTwoFactorFormRendererGhostF0145ff', false)) {
    \class_alias(__NAMESPACE__.'\\DefaultTwoFactorFormRendererGhostF0145ff', 'DefaultTwoFactorFormRendererGhostF0145ff', false);
}
