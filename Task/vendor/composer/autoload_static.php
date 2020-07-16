<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2d69bec428a898be10c6151383fcd91c
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Task\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Task\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2d69bec428a898be10c6151383fcd91c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2d69bec428a898be10c6151383fcd91c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}