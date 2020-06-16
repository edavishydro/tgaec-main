<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/edward/Downloads/tgaec-main/user/config/site.yaml',
    'modified' => 1592334458,
    'data' => [
        'title' => 'TGAEC',
        'default_lang' => 'en',
        'author' => [
            'name' => 'TGEAC Team',
            'email' => 'tgast@tgaec.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Grav is an easy to use, yet powerful, open source flat-file CMS'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'redirects' => NULL,
        'routes' => NULL,
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
