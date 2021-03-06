<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitce8414069cd779a063929679db624a8c
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Heinthuya\\Contact\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Heinthuya\\Contact\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitce8414069cd779a063929679db624a8c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitce8414069cd779a063929679db624a8c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitce8414069cd779a063929679db624a8c::$classMap;

        }, null, ClassLoader::class);
    }
}
