<?php

return [
    'driver' => 'mysql',
    'url' => env('GULA_DATABASE_URL'),
    'host' => env('GULA_DB_HOST', '127.0.0.1'),
    'port' => env('GULA_DB_PORT', '3306'),
    'database' => env('GULA_DB_DATABASE', 'forge'),
    'username' => env('GULA_DB_USERNAME', 'forge'),
    'password' => env('GULA_DB_PASSWORD', ''),
    'unix_socket' => env('GULA_DB_SOCKET', ''),
    'charset' => env('GULA_CHARSET', 'utf8mb4'),
    'collation' => env('GULA_COLLATION', 'utf8mb4_unicode_ci'),
    'prefix' => '',
    'prefix_indexes' => true,
    'strict' => true,
    'engine' => null,
    'options' => extension_loaded('pdo_mysql') ? array_filter([
        PDO::MYSQL_ATTR_SSL_CA => env('GULA_MYSQL_ATTR_SSL_CA'),
    ]) : [],
];
