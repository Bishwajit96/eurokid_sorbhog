<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita2d7de42865ca6a9b92b1fcd6a4f6452
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita2d7de42865ca6a9b92b1fcd6a4f6452::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita2d7de42865ca6a9b92b1fcd6a4f6452::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita2d7de42865ca6a9b92b1fcd6a4f6452::$classMap;

        }, null, ClassLoader::class);
    }
}
