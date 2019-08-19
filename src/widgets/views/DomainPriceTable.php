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
                 * 
                 * @var \hipanel\modules\finance\models\DomainZonePrice[] $prices
                 * @var \hipanel\modules\finance\models\DomainZonePrice $registration // TODO: it's a Money\Money, not DomainZonePrice!
                 * @var \hipanel\modules\finance\models\DomainZonePrice $renewal
                 * @var \hipanel\modules\finance\models\DomainZonePrice $transfer
                 */
                $prices = $domains[$name];
                $registration = $prices['dregistration'] ?? null;
                $renewal = $prices['drenewal'] ?? null;
                $transfer = $prices['dtransfer'] ?? null;
                ?>
                <tr>
                    <td><?= Html::tag('span', '.' . $zone, ['class' => '']) ?></td>
                    <td>
                        <?php if ($registration): ?>
                            <b><?= ResourcePriceWidget::widget(['price' => $registration]) ?></b> / <?= Yii::t('hipanel:site', 'year') ?>
                        <?php else: ?>
                            -
                        <?php endif ?>
                    </td>
                    <td>
                        <?php if ($renewal): ?>
                            <?= ResourcePriceWidget::widget(['price' => $renewal]) ?> / <?= Yii::t('hipanel:site', 'year') ?>
                        <?php else: ?>
                            -
                        <?php endif ?>
                    </td>
                    <td>
                        <?php if ($transfer): ?>
                            <b><?= ResourcePriceWidget::widget(['price' => $transfer]) ?></b>
                        <?php else: ?>
                            -
                        <?php endif ?>
                    </td>
                </tr>
            <?php endif ?>
        <?php endforeach ?>
    <?php endif ?>
    </tbody>
</table>
