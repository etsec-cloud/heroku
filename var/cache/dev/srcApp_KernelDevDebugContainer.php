<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJiSGkDQ\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJiSGkDQ/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJiSGkDQ.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJiSGkDQ\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerJiSGkDQ\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'JiSGkDQ',
    'container.build_id' => 'cd2c9437',
    'container.build_time' => 1585122708,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJiSGkDQ');