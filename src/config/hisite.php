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
            'class' => \hipanel\site\components\Connection::class
        ],
        'cache' => [
            'class' => \hipanel\components\Cache::class
        ],
        'urlManager' => [
            'class' => \codemix\localeurls\UrlManager::class,
            'languages' => ['ru', 'en'],
            'enableDefaultLanguageUrlCode' => true,
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
//        'menuManager' => [
//            'items' => [
//                'main' => \hipanel\site\menus\MainMenu::class,
//                'footer' => \hipanel\site\menus\FooterMenu::class,
//                'navbar' => [
//                    'class' => \hipanel\site\menus\NavbarMenu::class,
//                    'hipanelUrl' => $params['hipanelUrl'],
//                ],
//                'faq' => [
//                    'class' => \hipanel\site\menus\FaqMenu::class,
//                    'path' => '@hipanel/site/views/faq',
//                ]
//            ],
//        ],
        'authClientCollection' => [
            'class' => \hiam\authclient\Collection::class,
            'clients' => [
                'hiam' => [
                    'class' => \hiam\authclient\HiamClient::class,
                    'site' => $params['hiam.site'],
                    'clientId' => $params['hiam.client_id'],
                    'clientSecret' => $params['hiam.client_secret'],
                ],
            ],
        ],
        'i18n' => [
            'translations' => [
                'hipanel:site' => [
                    'class' => \yii\i18n\PhpMessageSource::class,
                    'basePath' => '@hipanel/site/messages',
                    'fileMap' => [
                        'hipanel:site' => 'hipanel:site.php',
                    ],
                ],
                'hipanel:site:pages' => [
                    'class' => \yii\i18n\PhpMessageSource::class,
                    'basePath' => '@hipanel/site/messages',
                    'fileMap' => [
                        'hipanel:site:pages' => 'hipanel:site:pages.php',
                    ],
                ],
                'hipanel:site:dns' => [
                    'class' => \yii\i18n\PhpMessageSource::class,
                    'basePath' => '@hipanel/site/messages',
                    'fileMap' => [
                        'hipanel:site:dns' => 'hipanel:site:dns.php',
                    ],
                ],
                'hipanel:site:vds' => [
                    'class' => \yii\i18n\PhpMessageSource::class,
                    'basePath' => '@hipanel/site/messages',
                    'fileMap' => [
                        'hipanel:site:vds' => 'hipanel:site:vds.php',
                    ],
                ],
                'hipanel:site:domain' => [
                    'class' => \yii\i18n\PhpMessageSource::class,
                    'basePath' => '@hipanel/site/messages',
                    'fileMap' => [
                        'hipanel:site:domain' => 'hipanel:site:domain.php',
                    ],
                ],
                'hipanel:site:faq' => [
                    'class' => \yii\i18n\PhpMessageSource::class,
                    'basePath' => '@hipanel/site/messages',
                    'fileMap' => [
                        'hipanel:site:faq' => 'hipanel:site:faq.php',
                    ],
                ],
                'hipanel:site:transfer' => [
                    'class' => \yii\i18n\PhpMessageSource::class,
                    'basePath' => '@hipanel/site/messages',
                    'fileMap' => [
                        'hipanel:site:transfer' => 'hipanel:site:transfer.php',
                    ],
                ],
                'hipanel:pages' => [
                    'class' => \yii\i18n\PhpMessageSource::class,
                    'basePath' => '@hipanel/site/messages',
                ],
            ],
        ],
    ],
    'container' => [
        'definitions' => [
            \hiqdev\thememanager\menus\AbstractMainMenu::class => [
                'class' => \hipanel\site\menus\MainMenu::class,
            ],
            \hiqdev\thememanager\menus\AbstractNavbarMenu::class => [
                'class' => \hipanel\site\menus\NavbarMenu::class,
                'hipanelUrl' => $params['hipanelUrl'],
            ],
            \hiqdev\thememanager\menus\AbstractFooterMenu::class => [
                'class' => \hipanel\site\menus\FooterMenu::class,
            ],
        ],
    ],
];
