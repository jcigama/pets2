<?php

//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the autoload file
require_once('vendor/autoload.php');

//Create an instance of the Base class
$f3 = Base::instance();
$f3->set('DEBUG', 3);

//Default Route
$f3->route('GET /', function() {
//    echo "My Pets";
    $view = new Template();
    echo $view->render('views/pet-home.html');
});

//Order Route
$f3->route('GET /order', function() {
//    echo "My Pets";
    $view = new Template();
    echo $view->render('views/pet-order.html');
});

//Order Route
$f3->route('POST /order2', function() {
    echo "<p>POST:</p><BR>";
    var_dump($_POST);
//    echo "My Pets";
//    $view = new Template();
//    echo $view->render('views/pet-order.html');
});


//Run fat free
$f3->run();