<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerV8QbUvf\Qm_Apps_Backoffice_Backend_BackofficeBackendKernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerV8QbUvf/Qm_Apps_Backoffice_Backend_BackofficeBackendKernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerV8QbUvf.legacy');

    return;
}

if (!\class_exists(Qm_Apps_Backoffice_Backend_BackofficeBackendKernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerV8QbUvf\Qm_Apps_Backoffice_Backend_BackofficeBackendKernelDevDebugContainer::class, Qm_Apps_Backoffice_Backend_BackofficeBackendKernelDevDebugContainer::class, false);
}

return new \ContainerV8QbUvf\Qm_Apps_Backoffice_Backend_BackofficeBackendKernelDevDebugContainer([
    'container.build_hash' => 'V8QbUvf',
    'container.build_id' => '962aa4da',
    'container.build_time' => 1684174118,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerV8QbUvf');
