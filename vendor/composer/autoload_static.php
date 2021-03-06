<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit09b67838d6b8998ecd59c700dbc608cc
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'src\\Point2D' => __DIR__ . '/../..' . '/src/Point2D.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit09b67838d6b8998ecd59c700dbc608cc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit09b67838d6b8998ecd59c700dbc608cc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit09b67838d6b8998ecd59c700dbc608cc::$classMap;

        }, null, ClassLoader::class);
    }
}
