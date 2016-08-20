<?php

return [
    'components' => [
        'themeManager' => [
            'defaultTheme' => 'dataserv',
        ],
        'menuManager' => [
            'menus' => [
                'main'   => \hiqdev\providersite\MainMenu::class,
                'footer' => \hiqdev\providersite\FooterMenu::class,
            ],
        ],
    ],
];
