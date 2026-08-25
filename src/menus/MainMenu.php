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
        $language = Yii::$app->language ?? 'en';

        return [
            'domains' => [
                'label' => Yii::t('hipanel:site', 'Domains'),
                'url' => ['/site/index'],
            ],
            // 'Cloud servers'/'CDN' both point at AdvancedHosting's own upsell pages -
            // only relevant for brands reselling AdvancedHosting's infrastructure.
            // Brands with their own VDS ordering flow (see canBuyVds()) get a single
            // 'vds' item instead (below), set via 'menu.vdsLink' - not shown at the
            // same time as these two.
            'cloud_servers' => [
                'label' => Yii::t('hipanel:site', 'Cloud servers'),
                'url' => "https://advancedhosting.com/{$language}/cloud-servers?refid=ahmenen",
                'visible' => !$this->canBuyVds(),
            ],
            'cdn' => [
                'label' => Yii::t('hipanel:site', 'CDN'),
                'url' => "https://advancedhosting.com/{$language}/static-cdn/?refid=ahmenen",
                'visible' => !$this->canBuyVds(),
            ],
            'vds' => [
                'label' => Yii::t('hipanel:site', 'VDS'),
                // Same '{language}' template convention as
                // 'module.server.order.redirect.url' (see OrderController::actionIndex).
                'url' => preg_replace('/{language}/', $language, Yii::$app->params['menu.vdsLink'] ?? ''),
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

        // Was unused dead code checking 'module.server.order.redirect.url', which
        // every brand has a value for (ahnames' advancedhosting.com upsell link is
        // the default fallback - see yii-asset-ahnames/config/params.php), so that
        // check could never actually distinguish "wants the single VDS link" brands
        // from the rest. 'menu.vdsLink' is a dedicated, opt-in param instead.
        return !empty($params['menu.vdsLink']) && ($user->can('server.pay') || $user->isGuest);
    }

    private function canBuyCertificates(): bool
    {
        $params = Yii::$app->params;
        $orderAllowed = isset($params['module.certificate.order.allowed']) && $params['module.certificate.order.allowed'] === true;

        return $orderAllowed && Yii::getAlias('@certificate', false);
    }
}
