<?php

use Dotenv\Dotenv;
use framework\App;
use framework\Database\Connection;
use framework\Database\Database;
use framework\Route;

$routes= require '../routes.php';

$dotenv = Dotenv::createImmutable(__DIR__.'/..');
$dotenv->load();

App::bind('config', require '../config.php');

App::bind('Database', new Database(
    Connection::make(App::get('config')['Database'])
));
App::bind('router', (new Route())->define($routes));