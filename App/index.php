<?php

use framework\App;

$tasks = App::get('Database')->selectAll('tasks');

$greeting = "Hello World!";

require '../resources/views/index.blade.php';