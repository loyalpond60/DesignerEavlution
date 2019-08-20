<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2c6da7ab0129dcb851c0fcd2d8071510
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static $classMap = array (
        'AdminDecorator' => __DIR__ . '/../..' . '/lib/Decorator.php',
        'AdminIndexClient' => __DIR__ . '/../..' . '/lib/admin_ClientOrder.php',
        'Ceiling' => __DIR__ . '/../..' . '/lib/RoomItem.php',
        'DB' => __DIR__ . '/../..' . '/lib/DBconfig.php',
        'Factory' => __DIR__ . '/../..' . '/lib/factory.php',
        'Floor' => __DIR__ . '/../..' . '/lib/RoomItem.php',
        'HeadDecorator' => __DIR__ . '/../..' . '/lib/Decorator.php',
        'Hydroelectric' => __DIR__ . '/../..' . '/lib/Hydroelectric.php',
        'HydroelectricClient' => __DIR__ . '/../..' . '/lib/stu_ClientOrder.php',
        'HydroelectricProduct' => __DIR__ . '/../..' . '/lib/productOrder.php',
        'HydroelectricWidget' => __DIR__ . '/../..' . '/lib/widget.php',
        'IItem' => __DIR__ . '/../..' . '/lib/RoomItem.php',
        'OrderClient' => __DIR__ . '/../..' . '/lib/stu_ClientOrder.php',
        'OrderListClient' => __DIR__ . '/../..' . '/lib/stu_ClientOrder.php',
        'OrderListProduct' => __DIR__ . '/../..' . '/lib/productOrder.php',
        'OrderListWidget' => __DIR__ . '/../..' . '/lib/widget.php',
        'OrderProduct' => __DIR__ . '/../..' . '/lib/productOrder.php',
        'OrderWidget' => __DIR__ . '/../..' . '/lib/widget.php',
        'PageFactory' => __DIR__ . '/../..' . '/lib/pageFactory.php',
        'Product' => __DIR__ . '/../..' . '/lib/product.php',
        'StudentDecorator' => __DIR__ . '/../..' . '/lib/Decorator.php',
        'Sundries' => __DIR__ . '/../..' . '/lib/RoomItem.php',
        'System' => __DIR__ . '/../..' . '/lib/System.php',
        'TestClient' => __DIR__ . '/../..' . '/lib/stu_ClientOrder.php',
        'TestProduct' => __DIR__ . '/../..' . '/lib/productOrder.php',
        'TestWidget' => __DIR__ . '/../..' . '/lib/widget.php',
        'Widget' => __DIR__ . '/../..' . '/lib/widget.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2c6da7ab0129dcb851c0fcd2d8071510::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2c6da7ab0129dcb851c0fcd2d8071510::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2c6da7ab0129dcb851c0fcd2d8071510::$classMap;

        }, null, ClassLoader::class);
    }
}
