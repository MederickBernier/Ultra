<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit62f8cb0e6030c898475de12e1218ef9b
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'Ultra\\Foundation\\' => 17,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ultra\\Foundation\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Ultra',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit62f8cb0e6030c898475de12e1218ef9b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit62f8cb0e6030c898475de12e1218ef9b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit62f8cb0e6030c898475de12e1218ef9b::$classMap;

        }, null, ClassLoader::class);
    }
}