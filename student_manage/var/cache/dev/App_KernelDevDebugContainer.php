<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container8Y35nMP\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container8Y35nMP/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container8Y35nMP.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container8Y35nMP\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container8Y35nMP\App_KernelDevDebugContainer([
    'container.build_hash' => '8Y35nMP',
    'container.build_id' => 'e631a0d5',
    'container.build_time' => 1640747640,
], __DIR__.\DIRECTORY_SEPARATOR.'Container8Y35nMP');
