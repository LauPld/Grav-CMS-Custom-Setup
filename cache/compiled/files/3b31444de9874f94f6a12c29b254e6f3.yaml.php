<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/grav3/user/plugins/databasequeries/blueprints.yaml',
    'modified' => 1739093137,
    'size' => 673,
    'data' => [
        'name' => 'Databasequeries',
        'version' => '1.0.0',
        'description' => 'A plugin to perform database queries.',
        'icon' => 'database',
        'author' => [
            'name' => 'Laurent Poulard',
            'email' => 'contact@laurentpoulard.online'
        ],
        'homepage' => 'https://example.com',
        'keywords' => [
            0 => 'grav',
            1 => 'plugin',
            2 => 'database',
            3 => 'sql'
        ],
        'bugs' => 'https://example.com/issues',
        'readme' => 'https://example.com/readme',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.6.0'
            ],
            1 => [
                'name' => 'Database',
                'version' => '>=1.0.2'
            ]
        ],
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.ENABLED',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.YES',
                        0 => 'PLUGIN_ADMIN.NO'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
