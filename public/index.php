<?php
require_once __DIR__ . "/../vendor/autoload.php";
$routes = require_once __DIR__ . "/../routes/web.php";
// echo "<pre>";
// print_r($routes);
// echo "</pre>";


// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";


$request = $_SERVER['REQUEST_URI'];
// echo $request;


$request = explode("?", $request)[0];
// echo $request;

// print_r($routes["/users/profile"]);

if (isset($routes[$request])) {
 // print_r($routes[$request]);
 $controller = $routes[$request][0] ?? null;
 $action = $routes[$request][1] ?? null;
 // echo $controller;
 // echo $action;
 if ($controller && $action) {
  $newController = new $controller();
  $newController->$action();
 } else {
  throw new Exception("404 Not Found");
 }
 // echo "=====================>";
 // echo ProfileController::class;
}
