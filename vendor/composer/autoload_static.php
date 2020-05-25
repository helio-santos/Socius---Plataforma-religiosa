<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit931a0eba8e3584bee7b0883a8713a5a4
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MF\\' => 3,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MF\\' => 
        array (
            0 => __DIR__ . '/..' . '/MF',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit931a0eba8e3584bee7b0883a8713a5a4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit931a0eba8e3584bee7b0883a8713a5a4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}