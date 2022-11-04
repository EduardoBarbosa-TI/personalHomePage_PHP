<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit234b9c3011acf3721f543ea26d2d9f7d
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'User\\DockerPhpMysql\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'User\\DockerPhpMysql\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit234b9c3011acf3721f543ea26d2d9f7d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit234b9c3011acf3721f543ea26d2d9f7d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit234b9c3011acf3721f543ea26d2d9f7d::$classMap;

        }, null, ClassLoader::class);
    }
}
