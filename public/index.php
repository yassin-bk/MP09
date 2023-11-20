<?php

use framework\App;

require '../vendor/autoload.php';

require '../framework/bootstrap.php';

try {
    App::get('router')->redirect($_SERVER['REQUEST_URI']);
} catch (Exception $e) {
}