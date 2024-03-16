<?php

return [
    'defaults' => [
        'guard' => 'api', // Se ha corregido aquí para usar una cadena en lugar de un array
        'passwords' => 'users',
    ],

    'guards' => [ // Asegúrate de definir tus guards en una sección 'guards' separada
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
        'api' => [ // Definición del guard 'api' usando Sanctum
            'driver' => 'sanctum',
            'provider' => 'users',
            'hash' => false,
        ],
    ],

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\Usuario::class,
        ],
    ],

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_reset_tokens',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    'password_timeout' => 10800,
];
