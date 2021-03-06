<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit01601c4400b3088cc0e759bd0b355bf0
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Middleware\\' => 11,
        ),
        'C' => 
        array (
            'Controllers\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Middleware\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/Middleware',
        ),
        'Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/Controllers',
        ),
    );

    public static $classMap = array (
        'Models\\UserBig' => __DIR__ . '/../..' . '/app/Models/UserBig.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit01601c4400b3088cc0e759bd0b355bf0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit01601c4400b3088cc0e759bd0b355bf0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit01601c4400b3088cc0e759bd0b355bf0::$classMap;

        }, null, ClassLoader::class);
    }
}
