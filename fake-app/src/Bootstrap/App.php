<?php

declare(strict_types=1);

use PgFramework\Home\HomeModule;

return [
    /* Application modules. Place your own on the list. */
    'modules' => [
        HomeModule::class,
    ],

    /* Put other middlewares on Router, RouteGroup or Route */
    'middlewares' => [
    ],

    'listeners' => [
    ],
];
