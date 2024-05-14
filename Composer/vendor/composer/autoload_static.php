<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit86bd20a1c887a201ddc8d951818b3585
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Lucas\\Composer\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Lucas\\Composer\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit86bd20a1c887a201ddc8d951818b3585::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit86bd20a1c887a201ddc8d951818b3585::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit86bd20a1c887a201ddc8d951818b3585::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit86bd20a1c887a201ddc8d951818b3585::$classMap;

        }, null, ClassLoader::class);
    }
}
