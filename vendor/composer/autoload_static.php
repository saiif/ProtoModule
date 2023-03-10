<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitea3e70f29469f7bebabaddc6f36b3fa4
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Saif\\ProtoModule\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Saif\\ProtoModule\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitea3e70f29469f7bebabaddc6f36b3fa4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitea3e70f29469f7bebabaddc6f36b3fa4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitea3e70f29469f7bebabaddc6f36b3fa4::$classMap;

        }, null, ClassLoader::class);
    }
}
