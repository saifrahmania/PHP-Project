<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc836d82f6286eabec3f5fb0a3bf431fe
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc836d82f6286eabec3f5fb0a3bf431fe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc836d82f6286eabec3f5fb0a3bf431fe::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc836d82f6286eabec3f5fb0a3bf431fe::$classMap;

        }, null, ClassLoader::class);
    }
}
