<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/user/config/plugins/adsense2.yaml',
    'modified' => 1538465517,
    'data' => [
        'enabled' => true,
        'sandbox' => false,
        'built_in_css' => true,
        'add_editor_button' => true,
        'use_auto_ads' => false,
        'adsense' => [
            'options' => [
                'mode' => 'async',
                'position' => 'center',
                'auto_ads_filter' => [
                    0 => 'blog',
                    1 => 'portfolio'
                ]
            ],
            'page_ads' => [
                0 => [
                    'id' => 'unique-id',
                    'slot' => 0,
                    'type' => 'inarticle',
                    'width' => 468,
                    'height' => 60
                ]
            ],
            'modular_ads' => [
                'horizontal' => [
                    'slot' => 0,
                    'width' => 728,
                    'height' => 90
                ],
                'vertical' => [
                    'slot' => 0,
                    'width' => 200,
                    'height' => 600
                ],
                'square' => [
                    'slot' => 0,
                    'width' => 300,
                    'height' => 300
                ]
            ]
        ]
    ]
];
