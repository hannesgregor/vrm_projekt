<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container1Yw0DfY\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container1Yw0DfY/App_KernelProdContainer.php') {
    touch(__DIR__.'/Container1Yw0DfY.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\Container1Yw0DfY\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \Container1Yw0DfY\App_KernelProdContainer([
    'container.build_hash' => '1Yw0DfY',
    'container.build_id' => 'c048e138',
    'container.build_time' => 1599811745,
], __DIR__.\DIRECTORY_SEPARATOR.'Container1Yw0DfY');
