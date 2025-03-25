<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit58651bc95aef10a1fbfb476a5af3f238
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alura\\Mvc\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alura\\Mvc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Alura\\Mvc\\Controller\\Controller' => __DIR__ . '/../..' . '/src/Controller/Controller.php',
        'Alura\\Mvc\\Controller\\DeleteVideoController' => __DIR__ . '/../..' . '/src/Controller/DeleteVideoController.php',
        'Alura\\Mvc\\Controller\\EditVideoController' => __DIR__ . '/../..' . '/src/Controller/EditVideoController.php',
        'Alura\\Mvc\\Controller\\Error404Controller' => __DIR__ . '/../..' . '/src/Controller/Error404Controller.php',
        'Alura\\Mvc\\Controller\\NewVideoController' => __DIR__ . '/../..' . '/src/Controller/NewVideoController.php',
        'Alura\\Mvc\\Controller\\VideoFormController' => __DIR__ . '/../..' . '/src/Controller/VideoFormController.php',
        'Alura\\Mvc\\Controller\\VideoListController' => __DIR__ . '/../..' . '/src/Controller/VideoListController.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit58651bc95aef10a1fbfb476a5af3f238::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit58651bc95aef10a1fbfb476a5af3f238::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit58651bc95aef10a1fbfb476a5af3f238::$classMap;

        }, null, ClassLoader::class);
    }
}
