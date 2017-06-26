<?php

namespace hipanel\site\controllers;

use hipanel\modules\domain\cart\DomainRegistrationProduct;
use hipanel\modules\domain\repositories\DomainTariffRepository;
use hipanel\modules\domain\models\Domain;
use hipanel\modules\finance\models\Tariff;
use hipanel\modules\server\helpers\ServerHelper;
use hipanel\modules\server\cart\ServerOrderProduct;
use hipanel\site\helpers\SiteHelper;
use hipanel\site\models\Thread;
use hiqdev\yii2\cart\actions\AddToCartAction;
use hisite\actions\RenderAction;
use hisite\actions\RedirectAction;
use Yii;
use hipanel\modules\domain\forms\CheckForm;

class SiteController extends \hipanel\controllers\SiteController
{

    /**
     *
     * @var DomainTariffRepository
     */
    protected $domainTariffRepository;

    public function __construct($id, $module, DomainTariffRepository $domainTariffRepository, array $config = [])
    {
        $this->domainTariffRepository = $domainTariffRepository;
        parent::__construct($id, $module, $config);
    }

    public function actions()
    {
        return array_filter(array_merge(parent::actions(), [
            'index' => [
                'class' => RenderAction::class,
                'data' => function () {
                    $zones = $this->domainTariffRepository->getAvailableZones();
                    $model = new CheckForm(array_keys($zones));
                    $model->fqdn = empty($model->fqdn) ? Yii::$app->request->get('fqdn') : $model->fqdn;
                    $out = $this->getDomainPriceTableData();
                    $out['model'] = $model;
                    $h = Yii::$app->getModule('merchant')->getCollection();
                    $availableMerchants = Yii::$app->hasModule('merchant') ? Yii::$app->getModule('merchant')->getCollection()->getItems() : [];
                    $out['availableMerchants'] = $availableMerchants;

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
                'url'   => ['site/contact'],
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
                },
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
                'productClass' => ServerOrderProduct::class,
            ],
            'contact' => null,
        ]));
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
