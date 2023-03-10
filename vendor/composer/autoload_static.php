<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit96c49e4f49f111c6019684a7d41dc2b4
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'ItsukiN22\\Helloworld\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ItsukiN22\\Helloworld\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit96c49e4f49f111c6019684a7d41dc2b4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit96c49e4f49f111c6019684a7d41dc2b4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit96c49e4f49f111c6019684a7d41dc2b4::$classMap;

        }, null, ClassLoader::class);
    }
}
