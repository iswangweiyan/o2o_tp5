<?php

return [
    // 生成应用公共文件 在application文件目录下面会创建这些文件,如果文件存在就不创建
    '__file__' => ['common.php', 'config.php', 'database.php'],

    // 定义demo模块的自动生成 （按照实际定义的文件名生成）

    /*
    'demo'     => [
    '__file__'   => ['common.php'],
    '__dir__'    => ['behavior', 'controller', 'model', 'view'],
    'controller' => ['Index', 'Test', 'UserType'],
    'model'      => ['User', 'UserType'],
    'view'       => ['index/index'],
    ],
     */

    // 其他更多的模块定义

    'common' => [
        '__dir__' => ['model'],
        'model' => ['Category', 'Admin'],
    ],

    'admin' => [
        '__dir__' => ['controller', 'view'],
        'controller' => ['Index'],
        'view' => ['index/index'],
    ],

    'api' => [
        '__dir__' => ['controller', 'view'],
        'controller' => ['Index', 'Image'],
    ],

];

//
