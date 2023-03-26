<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8b37714ac94e10608e15d0ce670b1707
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PgFramework\\FakeModule\\' => 23,
            'PgFramework\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PgFramework\\FakeModule\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'PgFramework\\' => 
        array (
            0 => __DIR__ . '/..' . '/willy68/pgmodule/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8b37714ac94e10608e15d0ce670b1707::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8b37714ac94e10608e15d0ce670b1707::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8b37714ac94e10608e15d0ce670b1707::$classMap;

        }, null, ClassLoader::class);
    }
}
