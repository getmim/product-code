<?php

return [
    '__name' => 'product-code',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/product-code.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/product-code' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'product' => NULL
            ]
        ],
        'optional' => [
            [
                'product-variant' => NULL
            ]
        ]
    ],
    'autoload' => [
        'classes' => [],
        'files' => []
    ],
    'libFormatter' => [
        'formats' => [
            'product' => [
                'code_private' => [
                    'type' => 'text'
                ],
                'code_sku' => [
                    'type' => 'text'
                ]
            ]
        ]
    ]
];
