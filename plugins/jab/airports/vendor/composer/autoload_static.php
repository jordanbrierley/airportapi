<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite1c068a891a672de712dce8412acaecf
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'League\\Fractal\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'League\\Fractal\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/fractal/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite1c068a891a672de712dce8412acaecf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite1c068a891a672de712dce8412acaecf::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}