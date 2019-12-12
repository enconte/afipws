<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0f65edcd125259e0fa221bf58e369043
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Enconte\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Enconte\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0f65edcd125259e0fa221bf58e369043::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0f65edcd125259e0fa221bf58e369043::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
