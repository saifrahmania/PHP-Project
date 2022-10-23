<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit771e5276ec6d326ad0e6a100c69fc192
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit771e5276ec6d326ad0e6a100c69fc192::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit771e5276ec6d326ad0e6a100c69fc192::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit771e5276ec6d326ad0e6a100c69fc192::$classMap;

        }, null, ClassLoader::class);
    }
}
