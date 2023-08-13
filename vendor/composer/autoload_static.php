<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit545c8c0e41bd77e1db01b5d4119ccf65
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\Pizza\\' => 10,
            'src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\Pizza\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Pizza',
        ),
        'src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit545c8c0e41bd77e1db01b5d4119ccf65::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit545c8c0e41bd77e1db01b5d4119ccf65::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit545c8c0e41bd77e1db01b5d4119ccf65::$classMap;

        }, null, ClassLoader::class);
    }
}
