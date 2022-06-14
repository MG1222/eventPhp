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

    '/logIn' => [
        'App\Controllers\LogIn',
        'logIn'
    ],

    '/userProfile' => [
        'App\Controllers\UserProfileController',
        'userProfile'
    ],

    '/category' => [
    'App\Controllers\CategoryController',
    'index'

    ]

];