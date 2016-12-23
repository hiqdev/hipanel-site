<?php

return [
    'sourcePath' => dirname(__DIR__),
    'messagePath' => dirname(__DIR__) . '/messages',
    'languages' => ['ru'],
    'removeUnused' => true,
    'markUnused' => true,
    'sort' => true,
    'ignoreCategories' => [
        'app',
        'cart',
        'hisite',
        'hipanel:server:order',
        'hipanel:server:os',
        'hipanel:domain',
        'hipanel:domainchecker',
        'hipanel:pages',
        'hipanel:vds',
    ]
];
