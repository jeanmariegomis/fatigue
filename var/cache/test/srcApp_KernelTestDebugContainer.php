<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXvFTJP1\srcApp_KernelTestDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXvFTJP1/srcApp_KernelTestDebugContainer.php') {
    touch(__DIR__.'/ContainerXvFTJP1.legacy');

    return;
}

if (!\class_exists(srcApp_KernelTestDebugContainer::class, false)) {
    \class_alias(\ContainerXvFTJP1\srcApp_KernelTestDebugContainer::class, srcApp_KernelTestDebugContainer::class, false);
}

return new \ContainerXvFTJP1\srcApp_KernelTestDebugContainer([
    'container.build_hash' => 'XvFTJP1',
    'container.build_id' => '0544f0f9',
    'container.build_time' => 1565008964,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXvFTJP1');