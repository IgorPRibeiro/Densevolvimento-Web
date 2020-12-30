<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit755ab198bf822f43f487f7b3ddabcba7
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit755ab198bf822f43f487f7b3ddabcba7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit755ab198bf822f43f487f7b3ddabcba7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit755ab198bf822f43f487f7b3ddabcba7::$classMap;

        }, null, ClassLoader::class);
    }
}
