<?php

// Use class and namespace
use App\App;

// include bootstrap file
require_once 'bootstrap.php';

// Instance of class
$app = new App;
// show message
echo $app->sayHello();