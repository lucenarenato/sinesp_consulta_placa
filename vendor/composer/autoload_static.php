<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4fd1076e40882f91eaa78c8d5350ccaa
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sinesp\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sinesp\\' => 
        array (
            0 => __DIR__ . '/..' . '/chapeupreto/sinesp/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4fd1076e40882f91eaa78c8d5350ccaa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4fd1076e40882f91eaa78c8d5350ccaa::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
