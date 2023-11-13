<?php

use Dotenv\Dotenv;
use framework\app;
use framework\Database\Connection;
use framework\Database\database;
use framework\Route;

$routes= require '../routes.php';

$dotenv = Dotenv::createInmutable(__DIR__.'/..');
$dotenv->load();

App::bind('config', require '../config.php');

App:bind('database', new database(
    Connection::make(App::get('config')['database'])
));
App::bind('router', (new Route())->define($routes));