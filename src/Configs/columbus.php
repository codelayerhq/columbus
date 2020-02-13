<?php

return [
    'provider' => \Codelayer\Columbus\Providers\Here::class,

    'config' => [
        'id'     => env('LOCATION_SEARCH_ID'),
        'secret' => env('LOCATION_SEARCH_SECRET'),
    ],
];
