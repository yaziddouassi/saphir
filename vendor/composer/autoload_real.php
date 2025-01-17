<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit9e4b9c5bb8069e3b78a602ff655cb355
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

        spl_autoload_register(array('ComposerAutoloaderInit9e4b9c5bb8069e3b78a602ff655cb355', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit9e4b9c5bb8069e3b78a602ff655cb355', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit9e4b9c5bb8069e3b78a602ff655cb355::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
