<?php
require_once __DIR__ . "/../vendor/autoload.php";
$routes = require_once __DIR__ . "/../routes/web.php";
// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";


$request = $_SERVER['REQUEST_URI'];
$request = explode("?", $request)[0];

// echo "<pre>";
// print_r($request);
// echo "</pre>";


print_r($routes["/users/profile"]);
