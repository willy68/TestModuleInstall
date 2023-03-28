<?php

/** This file is auto generated, do not edit */

declare(strict_types=1);

use PgFramework\FakeModule\Auth\AuthModule;
use PgFramework\FakeModule\FakeModule;
use PgFramework\FakeModule\RouterModule;

return [
    'modules' => [
		AuthModule::class,
		FakeModule::class,
		RouterModule::class,
    ]
];
