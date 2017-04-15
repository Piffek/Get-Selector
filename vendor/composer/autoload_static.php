<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit05729d17c83542f24baba38d11f4b696
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Download\\' => 9,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Download\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Download',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit05729d17c83542f24baba38d11f4b696::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit05729d17c83542f24baba38d11f4b696::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
