<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitd7c11bca0ebe8bcf7fec677103ac4175
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitd7c11bca0ebe8bcf7fec677103ac4175', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitd7c11bca0ebe8bcf7fec677103ac4175', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitd7c11bca0ebe8bcf7fec677103ac4175::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
