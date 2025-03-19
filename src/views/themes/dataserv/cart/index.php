<?php

use hiqdev\yii2\cart\CartPositionInterface;
use hiqdev\yii2\cart\grid\PriceColumn;
use hiqdev\yii2\cart\ShoppingCart;
use hiqdev\yii2\cart\widgets\QuantityCell;
use yii\data\ActiveDataProvider;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\Html;

$this->title = Yii::t('cart', 'Checkout');
$this->blocks['subTitle'] = Yii::t('cart', 'Date') . ': ' . Yii::$app->formatter->asDate(new DateTime());

/** @var ActiveDataProvider $dataProvider */
/** @var ShoppingCart $cart */

$this->registerCss(/** @lang CSS */ "
.invoice-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 50;
    background: rgba(255, 255, 255, 0.7);
    border-radius: 3px;
}
.invoice-overlay > .fa {
    position: absolute;
    top: 50%;
    left: 50%;
    margin-left: -15px;
    margin-top: -15px;
    color: #000;
    font-size: 30px;
}
");
?>

<section class="invoice" style="padding-top: 50px;">
    <div class="invoice-overlay" style="display: none"><i class="fa fa-refresh fa-spin"></i></div>
    <!-- Table row ---->
    <div class="row md-pt-50">
        <div class="col-xs-12 table-responsive">
            <?php
            echo GridView::widget([
                'dataProvider' => $dataProvider,
                'layout' => '{items}',
                'tableOptions' => [
                    'class' => 'table md-mb-50',
                ],
                'rowOptions' => function ($model, $key, $index, $grid) {
                    return $model->getRowOptions($key, $index, $grid);
                },
                'columns' => [
                    [
                        'attribute' => 'no',
                        'label' => '#',
                        'value' => function ($model) {
                            static $no;

                            return ++$no;
                        },
                        'headerOptions' => ['width' => '4%', 'style' => 'text-align: center'],
                        'contentOptions' => ['style' => 'text-align: center; vertical-align: middle;'],
                    ],
                    [
                        'attribute' => 'name',
                        'format' => 'raw',
                        'label' => Yii::t('cart', 'Description'),
                        'contentOptions' => ['style' => 'vertical-align: middle'],
                        'value' => function ($model) {
                            return $model->renderDescription();
                        },
                    ],
                    [
                        'attribute' => 'quantity',
                        'label' => Yii::t('cart', 'Quantity'),
                        'contentOptions' => ['style' => 'vertical-align: middle;white-space: nowrap;'],
                        'value' => static function ($model) {
                            return QuantityCell::widget(['model' => $model]);
                        },
                        'format' => 'raw',
                    ],
                    [
                        'class' => PriceColumn::class,
                        'cart' => $cart,
                    ],
                    'actions' => [
                        'class' => ActionColumn::className(),
                        'template' => '{remove}',
                        'headerOptions' => ['width' => '4%'],
                        'contentOptions' => ['style' => 'text-align: center; vertical-align: middle;'],
                        'buttons' => [
                            'remove' => function ($url, $model, $key) {
                                return Html::a('<i class="fa fa-times text-danger"></i>', ['remove', 'id' => $model->id]);
                            },
                        ],
                    ],
                ],
            ]); ?>
        </div>
    </div>

    <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-8">
            <?= $module->paymentMethods ?>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
            <p class="lead"><?= Yii::t('cart', 'Amount due') ?>:</p>
            <div class="table-responsive">
                <table class="table">
                    <tbody>
                    <tr>
                        <th style="width:30%"><?= Yii::t('cart', 'Subtotal') ?>:</th>
                        <td style="width:30%" align="right"><?= $cart->formatCurrency($cart->subtotal) ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th><?= Yii::t('cart', 'Discount') ?>:</th>
                        <td align="right"><?= $cart->formatCurrency($cart->discount) ?></td>
                        <td></td>
                    </tr>
                    <tr style="font-size:130%;font-weight:bold">
                        <th><?= Yii::t('cart', 'Total') ?>:</th>
                        <td align="right"><?= $cart->formatCurrency($cart->total) ?></td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- this row will not appear when printing -->
    <div class="row no-print md-pb-30">
        <div class="col-xs-4">
            <?= Html::a('<i class="fa fa-trash"></i> ' . Yii::t('cart', 'Clear cart'), ['clear'], ['class' => 'btn btn-danger no-radius btn-lg used']); ?>
        </div>
        <div class="col-xs-8"><span class="pull-right">
            <?php if ($module->termsPage) : ?>
                <?php $this->registerJs(<<<JS
                    const termsCheckbox = document.getElementById('term-of-use');
                    termsCheckbox.addEventListener('change', event => {
                      const orderButton = document.getElementById('make-order-button');
                      if (event.target.checked === true) {
                          orderButton.classList.remove('disabled');
                      } else {
                          orderButton.classList.add('disabled');
                      }
                    });
JS
); ?>
                <label>
                    <?= Html::checkbox('term_of_use', false, ['id' => 'term-of-use']) ?>
                    &nbsp;<?= Yii::t('cart', 'I have read and agree to the') ?> <?= Html::a(Yii::t('cart', 'terms of use'), $module->termsPage) ?>
                </label> &nbsp; &nbsp;
            <?php endif ?>
                <?php if ($module->orderButton) : ?>
                    <?= $module->orderButton ?>
                <?php else : ?>
                    <?= Html::a('<i class="fa fa-credit-card"></i> ' . Yii::t('cart', 'Make order'), $module->orderPage, ['id' => 'make-order-button', 'class' => ($module->termsPage) ? 'btn btn-success no-radius btn-lg used disabled' : 'btn btn-success no-radius btn-lg used']); ?>
                <?php endif ?>
        </span></div>
    </div>
</section>
