<?php

return [
    'components' => [
        'themeManager' => [
            'defaultTheme' => 'dataserv',
        ],
        'menuManager' => [
            'menus' => [
                'main'   => \hipanel\site\MainMenu::class,
                'footer' => \hipanel\site\FooterMenu::class,
            ],
        ],
    ],
];
