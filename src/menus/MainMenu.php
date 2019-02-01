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

use Yii;
use yii\widgets\Menu;
use hiqdev\yii2\cart\widgets\CartTeaser;

class MainMenu extends \hiqdev\yii2\menus\Menu
{
    public $widgetConfig = [
        'class' => Menu::class,
    ];

    public function items()
    {
        $user = Yii::$app->user;

        return [
            'domains' => [
                'label' => Yii::t('hipanel:site', 'Domains'),
                'url' => ['/site/index'],
            ],
            'vds' => [
                'label' => Yii::t('hipanel:site', 'VDS'),
                'url' => ['/site/vds'],
                'visible' => $user->can('server.pay') || $user->isGuest,
            ],
            'certificate' => [
                'label' => Yii::t('hipanel:site', 'SSL certificates'),
                'url' => ['/certificate/certificate-order/index'],
                'visible' => Yii::getAlias('@certificate', false),
            ],
            'transfer' => [
                'label' => Yii::t('hipanel:site', 'Transfer'),
                'url' => ['/domain/transfer/index'],
            ],
            'dns' => [
                'label' => Yii::t('hipanel:site', 'DNS'),
                'url' => ['/site/dns'],
            ],
            'contact' => [
                'label' => Yii::t('hipanel:site', 'Contact'),
                'url' => ['/site/contact'],
            ],
            'faq' => [
                'label' => Yii::t('hipanel:site', 'FAQ'),
                'url' => ['@faq/index'],
            ],
            'api' => [
                'label' => Yii::t('hipanel:site', 'API'),
                'url' => ['/pages/api/index'],
            ],
            [
                'label' => CartTeaser::widget(),
                'encode' => false,
                'options' => [
                    'class' => 'dropdown notifications-menu notifications-cart',
                    'style' => 'display: none',
                ],
            ],
        ];
    }
}
