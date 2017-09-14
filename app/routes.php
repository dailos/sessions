<?php

Route::get('/', function()
{
    $controller = new \App\Controllers\HomeController();
    return $controller->index();
});

Route::get('/login', function ()
{
    $controller = new \App\Controllers\AuthController();
    return $controller->loginForm();
});

Route::post('/login', function ()
{
    $controller = new \App\Controllers\AuthController();
    return $controller->login();
});

Route::get('/logout', function ()
{
    $controller = new \App\Controllers\AuthController();
    return $controller->logout();
});