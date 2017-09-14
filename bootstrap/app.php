<?php

Auth()->initSession();

$router = new Gears\Router();
$router->routesPath = 'app/routes.php';
$router->dispatch();