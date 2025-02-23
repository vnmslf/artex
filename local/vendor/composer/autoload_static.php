<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitefb7933a0c5df96cf53bd4cd4d4a958b
{
    public static $prefixLengthsPsr4 = array (
        'X' => 
        array (
            'XmlLoader\\' => 10,
        ),
        'T' => 
        array (
            'Tools\\' => 6,
        ),
        'P' => 
        array (
            'Pictures\\' => 9,
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'D' => 
        array (
            'Dao\\' => 4,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
        'A' => 
        array (
            'Akh\\Typograf\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'XmlLoader\\' => 
        array (
            0 => __DIR__ . '/../..' . '/api/class/XmlLoader',
        ),
        'Tools\\' => 
        array (
            0 => __DIR__ . '/../..' . '/api/class/Tools',
        ),
        'Pictures\\' => 
        array (
            0 => __DIR__ . '/../..' . '/api/class/Pictures',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Dao\\' => 
        array (
            0 => __DIR__ . '/../..' . '/api/class/Dao',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
        'Akh\\Typograf\\' => 
        array (
            0 => __DIR__ . '/..' . '/akh/typograf/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitefb7933a0c5df96cf53bd4cd4d4a958b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitefb7933a0c5df96cf53bd4cd4d4a958b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitefb7933a0c5df96cf53bd4cd4d4a958b::$classMap;

        }, null, ClassLoader::class);
    }
}
