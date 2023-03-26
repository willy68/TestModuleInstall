<?php

declare(strict_types=1);

namespace PgFramework\FakeModule\Auth;

interface Auth
{
    public  function getUser(): UserInterface;

}