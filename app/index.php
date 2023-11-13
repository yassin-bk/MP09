<?php
//echo "Hello World"

use framework\App;

$task = App::get('database')->selectAll('tasks');

$greeting = 'Hello World';

require '../resources/views/index.blade.php';

