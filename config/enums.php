<?php

return [
    
    'admin'     => [
        'name' => 'admin',
        'roles' => ['start', 'stop', 'clear', 'grant', 'revoke', 'deposit', 'issued', 'rate'],
    ],
    'operator'  => [
        'name' => 'operator',
        'roles' => ['deposit', 'issued']
    ],
    'guest'     => [
        'name' => 'guest',
        'roles' => ['seen']
    ],

];