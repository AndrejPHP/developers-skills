<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2e06549024d1c9bc2130c30f847a262a
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2e06549024d1c9bc2130c30f847a262a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2e06549024d1c9bc2130c30f847a262a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}