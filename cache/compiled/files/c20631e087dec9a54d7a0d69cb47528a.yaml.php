<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/grav3/user/plugins/database/blueprints.yaml',
    'modified' => 1663076860,
    'size' => 6416,
    'data' => [
        'name' => 'Database',
        'version' => '1.0.2',
        'description' => 'Allows a unified way to access databases within Grav via PDO',
        'icon' => 'database',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'developers@getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-database',
        'keywords' => 'grav, plugin, database, sqlite, mysql',
        'bugs' => 'https://github.com/getgrav/grav-plugin-database/issues',
        'docs' => 'https://github.com/getgrav/grav-plugin-database/blob/develop/README.md',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.6.0'
            ]
        ],
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'connections' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_DATABASE.CONNECTIONS',
                    'underline' => true,
                    'fields' => [
                        'mysql' => [
                            'type' => 'fieldset',
                            'title' => 'PLUGIN_DATABASE.DRIVER_MYSQL',
                            'collapsed' => true,
                            'collapsible' => true,
                            'fields' => [
                                'connections.mysql' => [
                                    'type' => 'list',
                                    'fields' => [
                                        '.name' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_DATABASE.CONNECTION_NAME',
                                            'validate' => [
                                                'required' => true
                                            ]
                                        ],
                                        '.host' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_DATABASE.SERVER_HOST_IP',
                                            'validate' => [
                                                'required' => true
                                            ]
                                        ],
                                        '.port' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_DATABASE.PORT',
                                            'validate' => [
                                                'required' => true,
                                                'type' => 'int',
                                                'min' => 0,
                                                'max' => 65536
                                            ],
                                            'default' => 3306
                                        ],
                                        '.dbname' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_DATABASE.DATABASE',
                                            'validate' => [
                                                'required' => true
                                            ]
                                        ],
                                        '.charset' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_DATABASE.MYSQL_CHARSET',
                                            'validate' => [
                                                'required' => true
                                            ]
                                        ],
                                        '.username' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_DATABASE.USERNAME',
                                            'validate' => [
                                                'required' => true
                                            ]
                                        ],
                                        '.password' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_DATABASE.PASSWORD',
                                            'validate' => [
                                                'required' => true
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'pgsql' => [
                            'type' => 'fieldset',
                            'title' => 'PLUGIN_DATABASE.DRIVER_PGSQL',
                            'collapsed' => true,
                            'collapsible' => true,
                            'fields' => [
                                'connections.pgsql' => [
                                    'type' => 'list',
                                    'fields' => [
                                        '.name' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_DATABASE.CONNECTION_NAME',
                                            'validate' => [
                                                'required' => true
                                            ]
                                        ],
                                        '.host' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_DATABASE.SERVER_HOST_IP',
                                            'validate' => [
                                                'required' => true
                                            ]
                                        ],
                                        '.port' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_DATABASE.PORT',
                                            'validate' => [
                                                'required' => true,
                                                'type' => 'int',
                                                'min' => 0,
                                                'max' => 65536
                                            ],
                                            'default' => 5432
                                        ],
                                        '.dbname' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_DATABASE.DATABASE',
                                            'validate' => [
                                                'required' => true
                                            ]
                                        ],
                                        '.sslmode' => [
                                            'type' => 'select',
                                            'label' => 'PLUGIN_DATABASE.PGSQL_SSLMODE',
                                            'validate' => [
                                                'required' => true
                                            ],
                                            'options' => [
                                                0 => 'prefer',
                                                1 => 'disable',
                                                2 => 'allow',
                                                3 => 'require',
                                                4 => 'verify-ca',
                                                5 => 'verify-full'
                                            ]
                                        ],
                                        '.user' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_DATABASE.USERNAME',
                                            'validate' => [
                                                'required' => true
                                            ]
                                        ],
                                        '.password' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_DATABASE.PASSWORD',
                                            'validate' => [
                                                'required' => true
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'sqlite' => [
                            'type' => 'fieldset',
                            'title' => 'PLUGIN_DATABASE.DRIVER_SQLITE',
                            'collapsed' => true,
                            'collapsible' => true,
                            'fields' => [
                                'connections.sqlite' => [
                                    'type' => 'list',
                                    'fields' => [
                                        '.name' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_DATABASE.CONNECTION_NAME',
                                            'validate' => [
                                                'required' => true
                                            ]
                                        ],
                                        '.directory' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_DATABASE.SQLITE_DIRECTORY',
                                            'validate' => [
                                                'required' => true
                                            ]
                                        ],
                                        '.filename' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_DATABASE.SQLITE_FILENAME',
                                            'validate' => [
                                                'required' => true
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'sqlsrv' => [
                            'type' => 'fieldset',
                            'title' => 'PLUGIN_DATABASE.DRIVER_SQLSRV',
                            'collapsed' => true,
                            'collapsible' => true,
                            'fields' => [
                                'connections.sqlsrv' => [
                                    'type' => 'list',
                                    'fields' => [
                                        '.name' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_DATABASE.CONNECTION_NAME',
                                            'validate' => [
                                                'required' => true
                                            ]
                                        ],
                                        '.server' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_DATABASE.SERVER_HOST_IP',
                                            'validate' => [
                                                'required' => true
                                            ]
                                        ],
                                        '.port' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_DATABASE.PORT',
                                            'validate' => [
                                                'required' => true,
                                                'type' => 'int',
                                                'min' => 0,
                                                'max' => 65536
                                            ],
                                            'default' => 1433
                                        ],
                                        '.database' => [
                                            'type' => 'checkbox',
                                            'label' => 'PLUGIN_DATABASE.DATABASE'
                                        ],
                                        '.encrypt' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_DATABASE.SQLSRV_ENCRYPT',
                                            'validate' => [
                                                'required' => true
                                            ]
                                        ],
                                        '.username' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_DATABASE.USERNAME',
                                            'validate' => [
                                                'required' => true
                                            ]
                                        ],
                                        '.password' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_DATABASE.PASSWORD',
                                            'validate' => [
                                                'required' => true
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
