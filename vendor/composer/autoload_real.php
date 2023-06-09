<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit8e9e6cdf5c58fbf88f1804edbbd16ede
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit8e9e6cdf5c58fbf88f1804edbbd16ede', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit8e9e6cdf5c58fbf88f1804edbbd16ede', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit8e9e6cdf5c58fbf88f1804edbbd16ede::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
