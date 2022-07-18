<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0c3dd522c7ff002e18f59f679a70b53f
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0c3dd522c7ff002e18f59f679a70b53f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0c3dd522c7ff002e18f59f679a70b53f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0c3dd522c7ff002e18f59f679a70b53f::$classMap;

        }, null, ClassLoader::class);
    }
}
