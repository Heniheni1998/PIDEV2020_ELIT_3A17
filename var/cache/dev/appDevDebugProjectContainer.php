<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYgf5nhe\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYgf5nhe/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerYgf5nhe.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerYgf5nhe\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerYgf5nhe\appDevDebugProjectContainer([
    'container.build_hash' => 'Ygf5nhe',
    'container.build_id' => 'ee1433b0',
    'container.build_time' => 1581283167,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYgf5nhe');
