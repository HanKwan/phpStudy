<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdef21c93b13221bbbf362b9cced3ddf2
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitdef21c93b13221bbbf362b9cced3ddf2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdef21c93b13221bbbf362b9cced3ddf2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdef21c93b13221bbbf362b9cced3ddf2::$classMap;

        }, null, ClassLoader::class);
    }
}
