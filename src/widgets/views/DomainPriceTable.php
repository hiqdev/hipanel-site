<?php

use yii\helpers\Html;

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
                <tr>
                    <td><?= Html::tag('span', '.' . $zone, ['class' => '']) ?></td>
                    <td>
                        <b><?= Yii::$app->formatter->asCurrency($domains[$name]['dregistration']['price'], 'usd') ?></b>
                        / <?= Yii::t('hipanel:site', 'year') ?></td>
                    <td><?= Yii::$app->formatter->asCurrency($domains[$name]['drenewal']['price'], 'usd') ?>
                        / <?= Yii::t('hipanel:site', 'year') ?></td>
                    <td>
                        <b><?= Yii::$app->formatter->asCurrency($domains[$name]['dtransfer']['price'], 'usd') ?></b>
                    </td>
                </tr>
            <?php endif ?>
        <?php endforeach ?>
    <?php endif ?>
    </tbody>
</table>
