<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7e764d8cfe0bacfc97fde5b65088dcb3
{
    public static $files = array (
        '45702aba72a3d88d5dd1a153f5231b73' => __DIR__ . '/../..' . '/app/helper.php',
    );

    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'IYUU\\Client\\' => 12,
            'IYUU\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'IYUU\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/ledccn/bittorrentclient/src',
        ),
        'IYUU\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $prefixesPsr0 = array (
        'C' => 
        array (
            'Curl' => 
            array (
                0 => __DIR__ . '/..' . '/curl/curl/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7e764d8cfe0bacfc97fde5b65088dcb3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7e764d8cfe0bacfc97fde5b65088dcb3::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit7e764d8cfe0bacfc97fde5b65088dcb3::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
