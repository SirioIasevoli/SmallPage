<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerM2t6smn\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerM2t6smn/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerM2t6smn.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerM2t6smn\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerM2t6smn\appDevDebugProjectContainer([
    'container.build_hash' => 'M2t6smn',
    'container.build_id' => 'c9689928',
    'container.build_time' => 1688475005,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerM2t6smn');
