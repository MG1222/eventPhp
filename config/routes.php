<?php

return [
    '/' => [
        'App\Controllers\HomeController',
        'index'
    ],

    '/signUp' => [
        'App\Controllers\SignUpController',
        'signUp'
    ],

    '/userProfile' => [
        'App\Controllers\UserProfileController',
        'userProfile'
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