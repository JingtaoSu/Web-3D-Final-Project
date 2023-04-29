<?php
// the central integration file, including Model, View, and Controller
// includes other files
require 'view/pageLoader.php';
require 'model/model.php';
require 'controller/controller.php';

$pageURL = $_SERVER['REQUEST_URI'];
$pageURL = substr($pageURL, strrpos($pageURL, 'index.php') + 10);

// creating a new controller instance
if (!$pageURL) {
    new Controller('home');
} else {
    new Controller($pageURL);
}
?>