<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit41cbd3b0d2120714ca28ad411e31328a
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tests\\' => 6,
        ),
        'L' => 
        array (
            'Libs\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests',
        ),
        'Libs\\' => 
        array (
            0 => __DIR__ . '/../..' . '/libs',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit41cbd3b0d2120714ca28ad411e31328a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit41cbd3b0d2120714ca28ad411e31328a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
