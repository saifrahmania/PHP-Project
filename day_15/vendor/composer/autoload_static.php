<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita3ceae9795ac58b0d049876d5453aa45
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App:\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App:\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app:',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita3ceae9795ac58b0d049876d5453aa45::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita3ceae9795ac58b0d049876d5453aa45::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita3ceae9795ac58b0d049876d5453aa45::$classMap;

        }, null, ClassLoader::class);
    }
}
