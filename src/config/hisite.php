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
    'modules' => [
        'domainchecker' => [
            'class' => \hipanel\modules\domainchecker\Module::class,
            'viewPath' => '@vendor/hiqdev/hipanel-site/src/views'
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
        'response' => [
            'class' => \yii\web\Response::class,
        ],
        'hiart' => [
            'disabledAuth' => true,
        ],
        'themeManager' => [
            'defaultTheme' => 'dataserv',
            'pathMap' => [
                '$themedViewPaths' => ['@hipanel/site/views'],
            ],
        ],
        'menuManager' => [
            'items' => [
                'main' => \hipanel\site\menus\MainMenu::class,
                'footer' => \hipanel\site\menus\FooterMenu::class,
                'navbar' => [
                    'class' => \hipanel\site\menus\NavbarMenu::class,
                    'hipanelUrl' => $params['hipanelUrl'],
                ],
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
        'i18n' => [
            'translations' => [
                'hipanel/site' => [
                    'class' => \yii\i18n\PhpMessageSource::class,
                    'basePath' => '@hipanel/site/messages',
                    'fileMap' => [
                        'hipanel/site' => 'site.php',
                    ],
                ],
                'hipanel/pages' => [
                    'class' => \yii\i18n\PhpMessageSource::class,
                    'basePath' => '@hipanel/site/messages',
                    'fileMap' => [
                        'hipanel/pages' => 'pages.php',
                    ],
                ],
            ],
        ],
    ],
];
