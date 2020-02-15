<?php

return [
    '__name' => 'admin-post-gallery',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/admin-post-gallery.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/admin-post-gallery' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'admin' => NULL
            ],
            [
                'post' => NULL
            ],
            [
                'admin-post' => NULL
            ],
            [
                'gallery' => NULL
            ],
            [
                'post-gallery' => NULL
            ],
            [
                'lib-form' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [],
        'files' => []
    ],
    'libForm' => [
        'forms' => [
            'admin.post.edit' => [
                'gallery' => [
                    'label' => 'Gallery',
                    'type' => 'select',
                    'sl-filter' => [
                        'route' => 'adminObjectFilter',
                        'params' => [],
                        'query' => ['type' => 'gallery']
                    ],
                    'rules' => [
                        'exists' => [
                            'model' => 'Gallery\\Model\\Gallery',
                            'field' => 'id'
                        ]
                    ]
                ]
            ]
        ]
    ]
];