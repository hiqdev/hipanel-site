<?php
/**
 * Selling site for HiPanel
 *
 * @link      http://hipanel.com/
 * @package   hipanel-site
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2017, HiQDev (http://hiqdev.com/)
 */

namespace hipanel\site\controllers;

use hipanel\modules\domain\cart\DomainRegistrationProduct;
use hipanel\modules\domain\forms\BulkCheckForm;
use hipanel\modules\domain\models\Domain;
use hipanel\modules\domain\repositories\DomainTariffRepository;
use hipanel\modules\finance\models\Tariff;
use hipanel\modules\server\cart\ServerOrderProduct;
use hipanel\modules\server\helpers\ServerHelper;
use hipanel\site\helpers\SiteHelper;
use hipanel\site\models\Thread;
use hipanel\logic\Impersonator;
use hiqdev\yii2\cart\actions\AddToCartAction;
use hisite\actions\RedirectAction;
use hisite\actions\RenderAction;
use Yii;
use yii\helpers\ArrayHelper;

class SiteController extends \hipanel\controllers\SiteController
{
    /**
     * @var DomainTariffRepository
     */
    protected $domainTariffRepository;

    public function __construct($id, $module, DomainTariffRepository $domainTariffRepository, Impersonator $impersonator, array $config = [])
    {
        $this->domainTariffRepository = $domainTariffRepository;
        parent::__construct($id, $module, $impersonator, $config);
    }

    public function actions()
    {
        return array_filter(array_merge(parent::actions(), [
            'index' => [
                'class' => RenderAction::class,
                'data' => function () {
                    $zones = $this->domainTariffRepository->getAvailableZones();
                    $model = new BulkCheckForm(array_keys($zones));
                    $out = $this->getDomainPriceTableData();
                    $out['model'] = $model;
                    $out['zones'] = ArrayHelper::map($zones, 'zone', function ($resource) {
                        return '.' . $resource->zone;
                    });

                    return $out;
                },
            ],
            'dns' => [
                'class' => RenderAction::class,
            ],
            'faq' => [
                'class' => RenderAction::class,
            ],
            'feedback' => [
                'class' => RedirectAction::class,
                'url' => ['site/contact'],
            ],
            /***
            'vds' => [
                'class' => RenderAction::class,
                'data' => function () {
                    if (!Yii::$app->user->can('server.pay') && !Yii::$app->user->isGuest) {
                        return $this->redirect(['site']);
                    }

                    $xenPackages = ServerHelper::getAvailablePackages(Tariff::TYPE_XEN);
                    $openvzPackages = ServerHelper::getAvailablePackages(Tariff::TYPE_OPENVZ);

                    return [
                        'xenPackages' => $xenPackages,
                        'openvzPackages' => $openvzPackages,
                    ];
                },
            ],
            ***/
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
                'productClass' => ServerOrderProduct::class,
            ],
            'contact' => null,
        ]));
    }

    protected function getAvailableMerchants()
    {
        if (!Yii::$app->user->can('deposit') || !Yii::$app->hasModule('merchant')) {
            return [];
        }

        return Yii::$app->getModule('merchant')->getPurchaseRequestCollection()->getItems();
    }

    public function actionOrder($id)
    {
        return $this->redirectOutside();

        $package = ServerHelper::getAvailablePackages(null, $id);
        $osImages = ServerHelper::getOsimages($package->tariff->type);

        return $this->render('order', [
            'package' => $package,
            'product' => new ServerOrderProduct(['tariff_id' => $package->tariff->id]),
            'groupedOsimages' => ServerHelper::groupOsimages($osImages),
            'panels' => ServerHelper::getPanels(),
        ]);
    }

    public function actionContact()
    {
        $thread = new Thread();
        $thread->scenario = Thread::SCENARIO_SUBMIT;

        if (Yii::$app->request->isPost && $thread->load(Yii::$app->request->post(), '')) { //  && $thread->save()
            Yii::$app->session->setFlash('contactFormSubmitted', 1);

            return $this->redirect(['/site/contact', '#' => 'sendstatus']);
        }

        return $this->render('contact', [
            'thread' => $thread,
        ]);
    }

    public function actionVds()
    {
        return $this->redirectOutside();
    }

    protected function getDomainPriceTableData()
    {
        $domains = Yii::$app->cache->getOrSet('GetAvailableInfo', function () {
            return array_shift(Tariff::batchPerform('GetAvailableInfo', [
                'seller' => SiteHelper::getSeller(),
                'type' => 'domain',
            ]));
        }, 60);
        $domainZones = Yii::$app->cache->getOrSet('GetZones', function () {
            return Domain::batchPerform('GetZones', []);
        }, 60);
        $domains = SiteHelper::domain($domains['resources'], $domainZones);
        $promotion = Yii::$app->cache->getOrSet('GetInfo', function () {
            return Tariff::perform('GetInfo', ['id' => 7312138]);
        }, 60);

        foreach (['domains', 'promotion'] as $price) {
            $zones = $$price;

            if (is_array($zones)) {
                foreach ($zones as &$zone) {
                    if (is_array($zone)) {
                        foreach ($zone as $operation => $info) {
                            if (!in_array($operation, ['dregistration', 'drenewal', 'dtransfer'], true)) {
                                unset($zone[$operation]);
                            }
                        }
                    }
                }
            }
            $$price = $zones;
        }

        return compact('domains', 'promotion', 'domainZones');
    }

    protected function redirectOutside()
    {
        $language = Yii::$app->language;
        $template = Yii::$app->params['module.server.redirect.url'];
        $url = preg_replace('/{language}/', $language, $template);
        return $this->redirect($url);
    }
}
