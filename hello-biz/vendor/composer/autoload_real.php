<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitbae087f1a843aa6f61839ff2a901e4ce
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

        spl_autoload_register(array('ComposerAutoloaderInitbae087f1a843aa6f61839ff2a901e4ce', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitbae087f1a843aa6f61839ff2a901e4ce', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitbae087f1a843aa6f61839ff2a901e4ce::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
