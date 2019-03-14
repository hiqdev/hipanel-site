<?php
/**
 * Selling site for HiPanel
 *
 * @link      http://hipanel.com/
 * @package   hipanel-site
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2017, HiQDev (http://hiqdev.com/)
 */

use ahnames\assets\ahnames\AhnamesAsset;

return [
    'aliases' => [
        '@ticket/create' => '/site/feedback',
    ],
    'controllerNamespace' => 'hipanel\site\controllers',
    'modules' => [
        'domain' => [
            'class' => \hipanel\modules\domain\Module::class,
        ],
        'news' => [
            'class' => \hisite\modules\news\Module::class,
        ],
        'pages' => [
            'storage' => [
                'class' => \creocoder\flysystem\LocalFilesystem::class,
                'path' => '@hipanel/site/pages',
            ],
        ],
        'merchant' => [
            'finishPage' => '/finance/cart/finish',
        ],
        'language' => [
            'languages' => [
                'en' => 'English',
                'ru' => 'Русский',
            ],
        ],
    ],
    'components' => [
        'user' => [
            'isGuestAllowed' => true,
        ],
        'response' => [
            'class' => \yii\web\Response::class,
        ],
        'urlManager' => [
            'class' => \codemix\localeurls\UrlManager::class,
            'languages' => ['ru', 'en'],
            'enableDefaultLanguageUrlCode' => true,
        ],
        'themeManager' => [
            'defaultTheme' => $params['hipanel.site.defaultTheme'],
            'pathMap' => [
                '$themedViewPaths' => [
                    '@hipanel/site/views',
                ],
                '@hipanel/site/widgets/views' => '$themedWidgetPaths',
            ],
            'assets' => array_filter([
                class_exists(AhnamesAsset::class) ? AhnamesAsset::class : null,
            ]),
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
                'hipanel.site.api' => [
                    'class' => \yii\i18n\PhpMessageSource::class,
                    'basePath' => '@hipanel/site/messages',
                ],
                'hipanel.site.about' => [
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
                'panelUrl' => $params['hipanel.url'],
            ],
            \hiqdev\thememanager\menus\AbstractFooterMenu::class => [
                'class' => \hipanel\site\menus\FooterMenu::class,
            ],
        ],
    ],
];
