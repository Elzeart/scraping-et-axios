<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit301b56aa6d77af065254053fb6ad1185
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DiDom\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DiDom\\' => 
        array (
            0 => __DIR__ . '/..' . '/imangazaliev/didom/src/DiDom',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit301b56aa6d77af065254053fb6ad1185::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit301b56aa6d77af065254053fb6ad1185::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit301b56aa6d77af065254053fb6ad1185::$classMap;

        }, null, ClassLoader::class);
    }
}
