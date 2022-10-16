<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd7c11bca0ebe8bcf7fec677103ac4175
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd7c11bca0ebe8bcf7fec677103ac4175::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd7c11bca0ebe8bcf7fec677103ac4175::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd7c11bca0ebe8bcf7fec677103ac4175::$classMap;

        }, null, ClassLoader::class);
    }
}
