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
        'domain' => [
            'class' => \hipanel\modules\domain\Module::class,
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
            'dataserv' => [
                'pathMap' => [
                    '$themedViewPaths' => ['@hipanel/site/themes/dataserv'],
                ],
            ],
            'original' => [
                'pathMap' => [
                    '$themedViewPaths' => ['@hipanel/site/themes/original'],
                ],
            ],
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
                'hipanel/site/pages' => [
                    'class' => \yii\i18n\PhpMessageSource::class,
                    'basePath' => '@hipanel/site/messages',
                    'fileMap' => [
                        'hipanel/site/pages' => 'pages.php',
                    ],
                ],
                'hipanel/site/dns' => [
                    'class' => \yii\i18n\PhpMessageSource::class,
                    'basePath' => '@hipanel/site/messages',
                    'fileMap' => [
                        'hipanel/site/dns' => 'dns.php',
                    ],
                ],
                'hipanel/site/vds' => [
                    'class' => \yii\i18n\PhpMessageSource::class,
                    'basePath' => '@hipanel/site/messages',
                    'fileMap' => [
                        'hipanel/site/vds' => 'vds.php',
                    ],
                ],
                'hipanel/site/domain' => [
                    'class' => \yii\i18n\PhpMessageSource::class,
                    'basePath' => '@hipanel/site/messages',
                    'fileMap' => [
                        'hipanel/site/domain' => 'domain.php',
                    ],
                ],
                'hipanel/site/faq' => [
                    'class' => \yii\i18n\PhpMessageSource::class,
                    'basePath' => '@hipanel/site/messages',
                    'fileMap' => [
                        'hipanel/site/faq' => 'faq.php',
                    ],
                ],
                'hipanel/site/transfer' => [
                    'class' => \yii\i18n\PhpMessageSource::class,
                    'basePath' => '@hipanel/site/messages',
                    'fileMap' => [
                        'hipanel/site/transfer' => 'transfer.php',
                    ],
                ],
            ],
        ],
    ],
];
