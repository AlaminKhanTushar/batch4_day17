<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6c81e94a2eecc39bd5be39bb4d411843
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit6c81e94a2eecc39bd5be39bb4d411843::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6c81e94a2eecc39bd5be39bb4d411843::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6c81e94a2eecc39bd5be39bb4d411843::$classMap;

        }, null, ClassLoader::class);
    }
}
