<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\SetList;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/admin',
        __DIR__ . '/classes',
        __DIR__ . '/includes',
        __DIR__ . '/public',
        __DIR__ . '/lib',
        __DIR__ . '/*.php',
    ])
    ->withSkip([
        __DIR__ . '/vendor',
        __DIR__ . '/install',
        __DIR__ . '/upgrades',
        __DIR__ . '/tmp',
    ])
    // Apply sets of rules for upgrading to PHP 8.0
    ->withSets([
        SetList::PHP_70,
        SetList::PHP_71,
        SetList::PHP_72,
        SetList::PHP_73,
        SetList::PHP_74,
        SetList::PHP_80,
    ]);
