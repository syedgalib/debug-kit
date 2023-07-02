<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4f006ec958125e1a2586ef1d940ecec5
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'DebugKit\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DebugKit\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4f006ec958125e1a2586ef1d940ecec5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4f006ec958125e1a2586ef1d940ecec5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4f006ec958125e1a2586ef1d940ecec5::$classMap;

        }, null, ClassLoader::class);
    }
}
