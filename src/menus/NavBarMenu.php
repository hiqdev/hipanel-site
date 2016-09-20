<?php

namespace hipanel\site\menus;

use hiqdev\yii2\cart\widgets\PanelTopCart;
use hiqdev\yii2\language\widgets\LanguageMenu;
use Yii;

class NavBarMenu extends \hiqdev\menumanager\Menu
{
    protected $_addTo = 'navbar';

    public function items()
    {
        return [
            [
                'label' => LanguageMenu::widget(),
                'encode' => false,
                'options' => [
                    'class' => 'dropdown language-menu',
                ]
            ],
            [
                'label' => PanelTopCart::widget(),
                'encode' => false,
                'options' => [
                    'class' => 'dropdown notifications-menu'
                ]
            ],
            ['label' => Yii::t('hisite', 'Login'), 'url' => ['/site/login'], 'visible' => Yii::$app->user->isGuest],
            ['label' => Yii::t('hisite', 'Panel'), 'url' => ['#'], 'visible' => !Yii::$app->user->isGuest],
            ['label' => Yii::t('hisite', 'Logout'), 'url' => ['/site/logout'], 'visible' => !Yii::$app->user->isGuest],
        ];
    }
}
