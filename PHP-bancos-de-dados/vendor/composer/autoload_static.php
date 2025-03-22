<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9f89be86fdca7c7f7e2a733d6616d97b
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alura\\Pdo\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alura\\Pdo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9f89be86fdca7c7f7e2a733d6616d97b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9f89be86fdca7c7f7e2a733d6616d97b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9f89be86fdca7c7f7e2a733d6616d97b::$classMap;

        }, null, ClassLoader::class);
    }
}
