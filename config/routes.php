<?php

return [
    '/' => [
        'App\Controllers\HomeController',
        'index'
    ],

    '/signUp' => [
        'App\Controllers\UserController',
        'signUp'
    ],

    '/category' => [
    'App\Controllers\CategoryController',
    'index'
    ],

    '/eventform' => [
        'App\Controllers\EventController',
        'index'
    ],

];