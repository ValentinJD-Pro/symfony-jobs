<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerIb5G89v\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerIb5G89v/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerIb5G89v.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerIb5G89v\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerIb5G89v\App_KernelDevDebugContainer([
    'container.build_hash' => 'Ib5G89v',
    'container.build_id' => 'eb611012',
    'container.build_time' => 1612781754,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerIb5G89v');
