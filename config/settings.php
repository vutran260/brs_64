<?php

return [
    'role' => [
        'user' => 0,
        'admin' => 1,
    ],
    'books' => [
        'status' => [
            'cancled' => 0,
            'pending' => 1,
            'accepted' => 2,
        ],
        'unread' => 0,
        'reading' => 1,
        'readed' => 2,
    ],
    'account' => [
        'admin' => [
            'email' => 'admin@gmail.com',
            'name' => 'Admin',
            'password' => 'admin',
            'avatar' => 'avatar',
        ],
        'user' => [
            'password' => 'user',
            'avatar' => 'avatar',
        ],
    ],
    'locale' => [
        'default' => 'en',
    ],
];
