<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8d627eacf4fad5a939ca4f70be95a4e0
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Toan\\Post\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Toan\\Post\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8d627eacf4fad5a939ca4f70be95a4e0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8d627eacf4fad5a939ca4f70be95a4e0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8d627eacf4fad5a939ca4f70be95a4e0::$classMap;

        }, null, ClassLoader::class);
    }
}
