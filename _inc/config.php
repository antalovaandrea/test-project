<?php

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

require_once 'vendor/autoload.php';

use Medoo\Medoo;

$database = new Medoo([
    'type' => 'mysql',
    'host' => 'localhost',
    'database' => 'todo',
    'username' => 'root',
    'password' => 'root'
]);

echo '<pre>';
print_r( $database->info() );
echo '</pre>';