<?php

return [
    'client_id' => env('PAYPAL_CLIENT_ID', ''),
    'secret' => env('PAYPAL_SECRET', ''),
    'settings' => [
        'mode' => env('PAYPAL_MODE', ''),
        'http.connectionTimeOut' => '30',
        'log.FileName' => storage_path().'/logs/paypal.log',
        'log.LogLevel' => 'ERROR',
    ],
];
