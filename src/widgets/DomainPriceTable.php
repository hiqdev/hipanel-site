<?php

namespace hipanel\site\widgets;

use hipanel\modules\domain\models\Domain;
use hipanel\modules\finance\models\Tariff;
use hipanel\site\helpers\SiteHelper;
use yii\base\Widget;

class DomainPriceTable extends Widget
{
    public $domains = [];

    public $promotion;

    public $domainZones = [];

    public $tableOptions = [];

    private $defaultTableOptions = [
        'id' => 'tld-table',
        'class' => 'tablesaw',
        'data-tablesaw-mode' => 'stack',
    ];

    public function run()
    {
        return $this->render('DomainPriceTable', [
            'domains' => $this->domains,
            'promotion' => $this->promotion,
            'domainZones' => $this->domainZones,
            'tableOptions' => array_merge($this->defaultTableOptions, $this->tableOptions),
        ]);
    }
}
