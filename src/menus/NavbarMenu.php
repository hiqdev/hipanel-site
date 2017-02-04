<?php

namespace hipanel\site\menus;

use hipanel\widgets\Gravatar;
use hiqdev\yii2\cart\widgets\CartTeaser;
use hiqdev\yii2\language\menus\LanguageMenu;
use Yii;

class NavbarMenu extends \hiqdev\yii2\menus\Menu
{
    protected $_addTo = 'navbar';

    public $hipanelUrl;

    public function items()
    {
        return [
            [
                'label' => '<i class="fa fa-user"></i>&nbsp;' . Yii::$app->user->identity->username,
                'encode' => false,
                'visible' => !Yii::$app->user->isGuest,
            ],
            [
                'label' => LanguageMenu::widget(),
                'encode' => false,
                'options' => [
                    'class' => 'dropdown language-menu',
                ]
            ],
            [
                'label' => CartTeaser::widget(),
                'encode' => false,
                'options' => [
                    'class' => 'dropdown notifications-menu notifications-cart'
                ]
            ],
            [
                'label' => Yii::t('hipanel:site', 'Login'),
                'url' => ['/site/login'],
                'visible' => Yii::$app->user->isGuest,
            ],
            [
                'label' => Yii::t('hipanel:site', 'Panel'),
                'url' => $this->hipanelUrl,
            ],
            [
                'label' => Yii::t('hipanel:site', 'Logout'),
                'url' => ['/site/logout'],
                'visible' => !Yii::$app->user->isGuest,
                'encode' => false,
            ],
        ];
    }
}
