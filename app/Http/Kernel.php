<?php

namespace App\Http;

class Kernel
{
    protected $middlewareGroups = [
    'web' => [
        \App\Http\Middleware\EncryptCookies::class,
        \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
        \Illuminate\Session\Middleware\StartSession::class,
        // ... other middleware
        \App\Http\Middleware\SetLocale::class,  // Make sure this is included
    ],
];
}