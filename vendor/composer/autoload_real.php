<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitc5e45c208cdb256ad09c848e8a656daa
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

        spl_autoload_register(array('ComposerAutoloaderInitc5e45c208cdb256ad09c848e8a656daa', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitc5e45c208cdb256ad09c848e8a656daa', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        \Composer\Autoload\ComposerStaticInitc5e45c208cdb256ad09c848e8a656daa::getInitializer($loader)();

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInitc5e45c208cdb256ad09c848e8a656daa::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequirec5e45c208cdb256ad09c848e8a656daa($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequirec5e45c208cdb256ad09c848e8a656daa($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}