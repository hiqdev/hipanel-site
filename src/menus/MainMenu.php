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

        return [
            'domains' => [
                'label' => Yii::t('hipanel:site', 'Domains'),
                'url' => ['/site/index'],
            ],
            'vds' => [
                'label' => Yii::t('hipanel:site', 'VDS'),
                'url' => ['/site/vds'],
                'visible' => $this->canBuyVds(),
            ],
            'certificate' => [
                'label' => Yii::t('hipanel:site', 'SSL certificates'),
                'url' => ['/certificate/certificate-order/index'],
                'visible' => $this->canBuyCertificates(),
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

    private function canBuyVds(): bool
    {
        $user = Yii::$app->user;
        $params = Yii::$app->params;

        return !empty($params['module.server.order.redirect.url']) && ($user->can('server.pay') || $user->isGuest);
    }

    private function canBuyCertificates(): bool
    {
        $params = Yii::$app->params;
        $orderAllowed = isset($params['module.certificate.order.allowed']) && $params['module.certificate.order.allowed'] === true;

        return $orderAllowed && Yii::getAlias('@certificate', false);
    }
}
