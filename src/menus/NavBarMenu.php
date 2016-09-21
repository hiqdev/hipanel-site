<?php

namespace hipanel\site\menus;

use hipanel\widgets\Gravatar;
use hiqdev\yii2\cart\widgets\PanelTopCart;
use hiqdev\yii2\language\widgets\LanguageMenu;
use Yii;

class NavBarMenu extends \hiqdev\menumanager\Menu
{
    protected $_addTo = 'navbar';

    public $hipanelUrl;

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
            [
                'label' => Yii::t('hisite', 'Login'),
                'url' => ['/site/login'],
                'visible' => Yii::$app->user->isGuest,
            ],
            [
                'label' => Yii::t('hisite', 'Panel'),
                'url' => $this->hipanelUrl,
                'visible' => !Yii::$app->user->isGuest,
            ],
            [
                'label' => $this->getGravatar() . '&nbsp;&nbsp;' . Yii::$app->user->identity->username . ' (' . Yii::t('hisite', 'Logout') . ')',
                'url' => ['/site/logout'],
                'visible' => !Yii::$app->user->isGuest,
                'encode' => false,
            ],
        ];
    }

    private function getGravatar()
    {
        $out = '';
        $email = @Yii::$app->user->identity->email;
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $out = Gravatar::widget([
                'size' => 18,
                'email' => $email,
                'options' => [
                    'alt' => Yii::$app->user->identity->username,
                ],
            ]);
        }

        return $out;
    }
}
