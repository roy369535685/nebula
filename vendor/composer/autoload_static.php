<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbf36848620bfd65712b3bd9ea6101e78
{
    public static $prefixLengthsPsr4 = array (
        'n' => 
        array (
            'nebula\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'nebula\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitbf36848620bfd65712b3bd9ea6101e78::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbf36848620bfd65712b3bd9ea6101e78::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbf36848620bfd65712b3bd9ea6101e78::$classMap;

        }, null, ClassLoader::class);
    }
}