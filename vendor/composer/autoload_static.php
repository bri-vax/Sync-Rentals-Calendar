<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit356b95f0ba77e19062789f47f87ce08e
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Eluceo\\iCal\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Eluceo\\iCal\\' => 
        array (
            0 => __DIR__ . '/..' . '/eluceo/ical/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit356b95f0ba77e19062789f47f87ce08e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit356b95f0ba77e19062789f47f87ce08e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
