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
    'modules' => [
        'domainchecker' => [
            'class' => \hipanel\modules\domainchecker\Module::class,
            'viewPath' => '@app/themes/dataserv/modules'
        ],
        'finance' => [
            'class' => \hipanel\modules\finance\Module::class,
        ],
        'cart' => [
            'class' => \hiqdev\yii2\cart\Module::class,
            'viewPath' => '@app/themes/dataserv/modules',
            'termsPage' => $params['organizationUrl'] . 'rules',
            'orderPage' => '/finance/cart/select',
            /*'orderButton'    => function ($module) {
                return Yii::$app->getView()->render('@hipanel/modules/finance/views/cart/order-button', [
                    'module' => $module,
                ]);
            },*/
            'paymentMethods' => function () {
                return \Yii::$app->getView()->render('@hipanel/modules/finance/views/cart/payment-methods', [
                    'merchants' => \Yii::$app->getModule('merchant')->getCollection([])->getItems(),
                ]);
            },
            'shoppingCartOptions' => [
                'on cartChange' => ['hipanel\modules\finance\cart\CartCalculator', 'execute'],
            ],
        ],
        'merchant' => [
            'class' => \hiqdev\yii2\merchant\Module::class,
            'returnPage' => '/finance/pay/return',
            'notifyPage' => '/finance/pay/notify',
            'finishPage' => '/finance/bill',
            'depositClass' => 'hipanel\modules\finance\merchant\Deposit',
            'collectionClass' => 'hipanel\modules\finance\merchant\Collection',
        ],
        'news' => [
            'class' => \hisite\modules\news\Module::class,
            'viewPath' => '@app/themes/dataserv/modules'
        ],
        'pages' => [
            'storage' => [
                'class' => \creocoder\flysystem\LocalFilesystem::class,
                'path'  => '@hipanel/site/pages',
            ],
        ],
    ],
    'components' => [
        'hiart' => [
            'class' => \hiqdev\hiart\Connection::class,
            'disabledAuth' => true,
            'config' => [
                'api_url' => $params['api_base_uri'],
                'base_uri' => $params['api_base_uri'],
            ],
        ],
        'themeManager' => [
            'defaultTheme' => 'dataserv',
            'viewPaths' => [
                '@hipanel/site/views',
            ],
        ],
        'menuManager' => [
            'menus' => [
                'main' => \hipanel\site\menus\MainMenu::class,
                'footer' => \hipanel\site\menus\FooterMenu::class,
            ],
        ],
        'authClientCollection' => [
            'class' => \hiam\authclient\Collection::class,
            'clients' => [
                'hiam' => [
                    'class' => \hiam\authclient\HiamClient::class,
                    'site' => $params['hiam_site'],
                    'clientId' => $params['hiam_client_id'],
                    'clientSecret' => $params['hiam_client_secret'],
                ],
            ],
        ],
    ],
];
