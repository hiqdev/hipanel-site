<?php

use hipanel\modules\finance\widgets\ResourcePriceWidget;
use yii\helpers\Html;

/** @var $tableOptions array */
/** @var $domainZones array */
/** @var $domains array */
?>
<table <?= Html::renderTagAttributes($tableOptions)?> >
    <thead>
    <tr>
        <th><?= Yii::t('hipanel:domain', 'Zone') ?></th>
        <th><?= Yii::t('hipanel:domain', 'Registration') ?></th>
        <th><?= Yii::t('hipanel:domain', 'Renewal') ?></th>
        <th><?= Yii::t('hipanel:domain', 'Transfer') ?></th>
    </tr>
    </thead>
    <tbody>
    <?php if (!empty($domains)) : ?>
        <?php foreach ($domainZones as $zone) : ?>
            <?php $hide = false ?>
            <?php $name = 'zone:.' . $zone ?>
            <?php if (empty($domains[$name])) continue ?>
            <?php foreach ($domains[$name] as $v) : ?>
                <?php if (empty($v['price'])) $hide = true ?>
            <?php endforeach ?>
            <?php if (!$hide) : ?>
                <?php
                /**
                 * @var \hipanel\modules\finance\models\DomainZonePrice[] $prices
                 * @var \hipanel\modules\finance\models\DomainZonePrice $registration
                 * @var \hipanel\modules\finance\models\DomainZonePrice $renewal
                 * @var \hipanel\modules\finance\models\DomainZonePrice $transfer
                 */
                $prices = $domains[$name];
                $registration = $prices['domain,dregistration'];
                $renewal = $prices['domain,drenewal'];
                $transfer = $prices['domain,dtransfer'];
                ?>
                <tr>
                    <td><?= Html::tag('span', '.' . $zone, ['class' => '']) ?></td>
                    <td>
                        <b><?= ResourcePriceWidget::widget(['price' => $registration->getMoney()]) ?></b>
                        / <?= Yii::t('hipanel:site', 'year') ?>
                    </td>
                    <td>
                        <?= ResourcePriceWidget::widget(['price' => $renewal->getMoney()]) ?>
                        / <?= Yii::t('hipanel:site', 'year') ?>
                    </td>
                    <td>
                        <b><?= ResourcePriceWidget::widget(['price' => $transfer->getMoney()]) ?></b>
                    </td>
                </tr>
            <?php endif ?>
        <?php endforeach ?>
    <?php endif ?>
    </tbody>
</table>
