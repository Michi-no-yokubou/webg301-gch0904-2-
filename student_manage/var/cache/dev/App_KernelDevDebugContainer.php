<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerIIXhVMP\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerIIXhVMP/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerIIXhVMP.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerIIXhVMP\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerIIXhVMP\App_KernelDevDebugContainer([
    'container.build_hash' => 'IIXhVMP',
    'container.build_id' => '61299583',
    'container.build_time' => 1641432243,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerIIXhVMP');
