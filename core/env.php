<?php

// define('DATABASE', [
//     'driver'    => 'mysql',
//     'host'      => 'localhost',
//     'database'  => 'vacunas',
//     'username'  => 'root',
//     'password'  => '',
//     'charset'   => 'utf8',
//     'collation' => 'utf8_unicode_ci',
//     'prefix'    => ''
// ]);

session_start();

define('DATABASE', [
    'driver'    => 'mysql',
    'host'      => $_ENV["DB_HOST"],
    'database'  => $_ENV["DB_NAME"],
    'username'  => $_ENV["DB_USER"],
    'password'  => $_ENV["DB_PASSWORD"],
    'charset'   => $_ENV["DB_CHARSET"],
    'port'      => $_ENV["DB_PORT"],
    'collation' => 'utf8_unicode_ci',
    'prefix'    => ''
]);



?>