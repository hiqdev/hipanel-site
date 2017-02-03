<?php

namespace hipanel\site\widgets;

use hipanel\modules\domain\models\Domain;
use hipanel\modules\finance\models\Tariff;
use hipanel\site\helpers\SiteHelper;
use yii\base\Widget;

class DomainPriceTable extends Widget
{
    public function run()
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

        return $this->render('DomainPriceTable', compact('domains', 'promotion', 'domainZones'));

    }
}
