<?php

namespace hipanel\site\widgets;

use hipanel\modules\domain\models\Domain;
use hipanel\modules\finance\models\Tariff;
use yii\base\Widget;
use hipanel\site\helpers\SiteHelper;

class DomainPriceTable extends Widget
{
    public function run()
    {
        $domains = array_shift(Tariff::perform('GetAvailableInfo', [
            'seller' => SiteHelper::getSeller(),
            'type' => 'domain',
        ], true));
        $domainZones = Domain::perform('GetZones', [], true);
        $domains = SiteHelper::domain($domains['resources'], $domainZones);
        $promotion = Tariff::perform('GetInfo', ['id' => 7312138]);
//        if (!err::is($promoution)) tpl::set('promoution', resources::domain($promoution['resources'], tpl::get('zones')));

        foreach (['domains', 'promotion'] as $price) {
            $zones = $$price;
            foreach ($zones as &$zone) {
                if (is_array($zone)) {
                    foreach ($zone as $operation => $info) {
                        if (!in_array($operation, ['dregistration', 'drenewal', 'dtransfer'])) unset($zone[$operation]);
                    }
                }
            }
            $$price = $zones;
        }

        return $this->render('DomainPriceTable', compact('domains', 'promotion', 'domainZones'));

    }
}
