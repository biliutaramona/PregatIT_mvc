<?php
namespace App;
// /auth/login
// /auth/logout
// /auth/register

// /books
// /books/create
// /books/update/{id}
// /books/delete/{id}

class Routes
{
    private static array $routes = [
        '/' => [
            'get' => 'App\Controller\Auth@showLogin'
        ],
        '/auth/login' => [
            'post' => 'App\Controller\Auth@login',
            'get' => 'App\Controller\Auth@showLogin'
        ],
        '/auth/logout' => [
            'get' => 'App\Controller\Auth@logout'
        ],
        '/auth/register' => [
            'post' => 'App\Controller\Auth@register',
            'get' => 'App\Controller\Auth@showRegister'
        ],
        '/books' => [
            'get' => 'App\Controller\Book@index'
        ]
    ];

    public static function getAll(): array
    {
        return self::$routes;
    }
}
