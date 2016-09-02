<?php

namespace hipanel\site\controllers;

use hipanel\modules\domain\cart\DomainRegistrationProduct;
use hipanel\modules\server\helpers\ServerHelper;
use hipanel\modules\server\cart\Tariff;
use hiqdev\yii2\cart\actions\AddToCartAction;
use hisite\actions\RenderAction;
use hipanel\modules\server\cart\ServerOrderProduct;

class SiteController extends \hisite\controllers\SiteController
{
    public function actions()
    {
        return [
            'index' => [
                'class' => RenderAction::class,
            ],
            'vds' => [
                'class' => RenderAction::class,
                'data' => function () {
                    $xenPackages = ServerHelper::getAvailablePackages(Tariff::TYPE_SVDS);
                    $openvzPackages = ServerHelper::getAvailablePackages(Tariff::TYPE_OVDS);

                    return [
                        'xenPackages' => $xenPackages,
                        'openvzPackages' => $openvzPackages,
                    ];
                }
            ],
            'domains' => [
                'class' => RenderAction::class,
            ],
            'transfer' => [
                'class' => RenderAction::class,
            ],
            'dns' => [
                'class' => RenderAction::class,
            ],
            'help' => [
                'class' => RenderAction::class,
            ],
            'faq' => [
                'class' => RenderAction::class,
            ],
            'terms-and-conditions' => [
                'class' => RenderAction::class,
            ],
            'add-to-cart-registration' => [
                'class' => AddToCartAction::class,
                'productClass' => DomainRegistrationProduct::class,
            ],
            'add-to-cart' => [
                'class' => AddToCartAction::class,
                'productClass' => ServerOrderProduct::class
            ]
        ];
    }
}
