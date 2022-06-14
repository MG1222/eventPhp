<?php

return [
    '/' => [
        'App\Controllers\HomeController',
        'index'
    ],
    '/logIn' => [
        'App\Controllers\UserController',
        'logIn'
    ],
    '/category' => [
    'App\Controllers\CategoryController',
    'index'
    ]
];