<?php

return [
    'Product\\Model\\Product' => [
        'fields' => [
            'code_private' => [
                'type' => 'VARCHAR',
                'length' => 100,
                'attrs' => [
                    'null' => false
                ],
                'index' => 9700
            ],
            'code_sku' => [
                'type' => 'VARCHAR',
                'length' => 100,
                'attrs' => [
                    'null' => false
                ],
                'index' => 9710
            ]
        ]
    ]
];
