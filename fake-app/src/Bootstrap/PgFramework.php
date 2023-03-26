<?php

/* This file is auto generated, do not edit */

declare(strict_types=1);

use PgFramework\FakeModule\RouterModule;
use PgFramework\FakeModule\Auth\AuthModule;
use PgFramework\FakeModule\FakeModule;

return [
    'modules' => [
		RouterModule::class,
   		AuthModule::class,
		FakeModule::class,
    ]
];
