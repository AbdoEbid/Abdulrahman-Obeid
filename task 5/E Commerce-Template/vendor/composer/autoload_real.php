<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit9f44ad2969b4cb2e944dac0eaf3f5a96
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

        spl_autoload_register(array('ComposerAutoloaderInit9f44ad2969b4cb2e944dac0eaf3f5a96', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit9f44ad2969b4cb2e944dac0eaf3f5a96', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit9f44ad2969b4cb2e944dac0eaf3f5a96::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
