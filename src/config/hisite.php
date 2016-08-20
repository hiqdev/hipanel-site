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
    'components' => [
        'themeManager' => [
            'defaultTheme' => 'dataserv',
        ],
        'menuManager' => [
            'menus' => [
                'main' => \hipanel\site\MainMenu::class,
                'footer' => \hipanel\site\FooterMenu::class,
            ],
        ],
    ],
];
