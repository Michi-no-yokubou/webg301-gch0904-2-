<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerABH5egF\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerABH5egF/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerABH5egF.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerABH5egF\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerABH5egF\App_KernelDevDebugContainer([
    'container.build_hash' => 'ABH5egF',
    'container.build_id' => '9b8fdb26',
    'container.build_time' => 1640786406,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerABH5egF');
