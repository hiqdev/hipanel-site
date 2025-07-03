<?php
/**
 * Selling site for HiPanel
 *
 * @link      http://hipanel.com/
 * @package   hipanel-site
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2017, HiQDev (http://hiqdev.com/)
 */

namespace hipanel\site\menus;

use hiqdev\yii2\cart\widgets\CartTeaser;
use hiqdev\yii2\language\menus\LanguageMenu;
use Yii;

class NavbarMenu extends \hiqdev\yii2\menus\Menu
{
    protected $_addTo = 'navbar';

    public $panelUrl;

    public function items()
    {
        return [
            [
                'label' => '<i class="fa fa-user"></i>&nbsp;' . (Yii::$app->user->isGuest ? '' : Yii::$app->user->identity->username),
                'encode' => false,
                'visible' => !Yii::$app->user->isGuest,
            ],
            [
                'label' => LanguageMenu::widget(),
                'encode' => false,
                'options' => [
                    'class' => 'dropdown language-menu',
                ],
            ],
            [
                'label' => CartTeaser::widget(),
                'encode' => false,
                'options' => [
                    'class' => 'dropdown notifications-menu notifications-cart',
                ],
            ],
            [
                'label' => Yii::t('hipanel:site', 'Login'),
                'url' => ['/site/login'],
                'visible' => Yii::$app->user->isGuest,
            ],
            [
                'label' => Yii::t('hipanel:site', 'Panel'),
                'url' => $this->panelUrl,
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
