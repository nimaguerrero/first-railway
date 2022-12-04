<?php
session_start();

if (!empty($_ENV["ENT"]) && $_ENV["ENT"] == "desarrollo") {

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
    
} else {
    
    define('DATABASE', [
        'driver'    => 'mysql',
        'host'      => 'localhost',
        'database'  => 'vacunas',
        'username'  => 'root',
        'password'  => '',
        'charset'   => 'utf8mb4',
        'collation' => 'utf8_unicode_ci',
        'prefix'    => ''
    ]);
}

?>