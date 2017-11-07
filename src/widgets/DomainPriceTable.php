<?php
/**
 * Selling site for HiPanel
 *
 * @link      http://hipanel.com/
 * @package   hipanel-site
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2017, HiQDev (http://hiqdev.com/)
 */

namespace hipanel\site\widgets;

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
