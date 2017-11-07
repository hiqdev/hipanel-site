<?php
/**
 * Selling site for HiPanel
 *
 * @link      http://hipanel.com/
 * @package   hipanel-site
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2017, HiQDev (http://hiqdev.com/)
 */

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
    ],
];
