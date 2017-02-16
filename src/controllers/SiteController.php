<?php

namespace hipanel\site\controllers;

use hipanel\modules\domain\cart\DomainRegistrationProduct;
use hipanel\modules\domain\models\Domain;
use hipanel\modules\finance\models\Tariff;
use hipanel\modules\server\helpers\ServerHelper;
use hipanel\modules\server\cart\ServerOrderProduct;
use hipanel\site\helpers\SiteHelper;
use hipanel\site\models\Thread;
use hiqdev\yii2\cart\actions\AddToCartAction;
use hisite\actions\RenderAction;
use Yii;

class SiteController extends \hipanel\controllers\SiteController
{
    public function actions()
    {
        return array_merge(parent::actions(), [
            'index' => [
                'class' => RenderAction::class,
                'data' => function () {
                    return $this->getDomainPriceTableData();
                }
            ],
            'dns' => [
                'class' => RenderAction::class,
            ],
            'faq' => [
                'class' => RenderAction::class,
            ],
            'vds' => [
                'class' => RenderAction::class,
                'data' => function () {
                    $xenPackages = ServerHelper::getAvailablePackages(Tariff::TYPE_XEN);
                    $openvzPackages = ServerHelper::getAvailablePackages(Tariff::TYPE_OPENVZ);

                    return [
                        'xenPackages' => $xenPackages,
                        'openvzPackages' => $openvzPackages,
                    ];
                }
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
                'redirectToCart' => true,
                'productClass' => ServerOrderProduct::class
            ]
        ]);
    }

    public function actionOrder($id)
    {
        $package = ServerHelper::getAvailablePackages(null, $id);
        $osImages = ServerHelper::getOsimages($package->tariff->type);

        return $this->render('order', [
            'package' => $package,
            'product' => new ServerOrderProduct(['tariff_id' => $package->tariff->id]),
            'groupedOsimages' => ServerHelper::groupOsimages($osImages),
            'panels' => ServerHelper::getPanels(),
        ]);
    }

    public function actionFeedback()
    {
        $thread = new Thread();
        $thread->scenario = Thread::SCENARIO_SUBMIT;

        if (Yii::$app->request->isPost) {
            Yii::$app->session->setFlash('contactFormSubmitted', 1);
            $thread->load(Yii::$app->request->post(), '');
            $thread->save();
        }

        return $this->render('contact', [
            'thread' => $thread,
        ]);
    }

    protected function getDomainPriceTableData()
    {
        $domains = array_shift(Tariff::batchPerform('GetAvailableInfo', [
            'seller' => SiteHelper::getSeller(),
            'type' => 'domain',
        ]));
        $domainZones = Domain::batchPerform('GetZones', []);
        $domains = SiteHelper::domain($domains['resources'], $domainZones);
        $promotion = Tariff::perform('GetInfo', ['id' => 7312138]);

        foreach (['domains', 'promotion'] as $price) {
            $zones = $$price;

            if (is_array($zones)) {
                foreach ($zones as &$zone) {
                    if (is_array($zone)) {
                        foreach ($zone as $operation => $info) {
                            if (!in_array($operation, ['dregistration', 'drenewal', 'dtransfer'])) unset($zone[$operation]);
                        }
                    }
                }
            }
            $$price = $zones;
        }

        return compact('domains', 'promotion', 'domainZones');
    }
}
