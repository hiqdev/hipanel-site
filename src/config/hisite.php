<?php

/*
 * Selling site for HiPanel
 *
 * @link      http://hipanel.com/
 * @package   hipanel-site
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016, HiQDev (http://hiqdev.com/)
 */

return [
    'controllerNamespace' => 'hipanel\site\controllers',
    'aliases' => [
        '@bill' => '/finance/bill',
        '@purse' => '/finance/purse',
        '@tariff' => '/finance/tariff',
        '@pay' => '/merchant/pay',
        '@cart' => '/cart/cart',
    ],
    'components' => [
        'themeManager' => [
            'defaultTheme' => 'dataserv',
            'pathDirs' => [
                '@hipanel/site',
            ],
        ],
        'menuManager' => [
            'menus' => [
                'main' => \hipanel\site\MainMenu::class,
                'footer' => \hipanel\site\FooterMenu::class,
            ],
        ],
        'authClientCollection' => [
            'class' => 'hiam\authclient\Collection',
            'clients' => [
                'hiam' => $params['hiam'],
            ],
        ]
    ],
];
