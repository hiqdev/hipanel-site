<?php

use hiqdev\yii2\merchant\widgets\PayButton;
use yii\helpers\Html;

$this->title = Yii::t('merchant', 'Select payment method');
$this->params['breadcrumbs'][] = $this->title;
$this->registerCss("
.products-list .product-description {
    font-size: 12px;
}
");
?>

<div class="row">
    <div class="col-md-offset-2 col-md-8">
        <div class="panel <?= empty($requests) ? 'panel-danger' : '' ?>">
            <div class="panel-body">
                <?php if (empty($requests)) : ?>
                    <?= Html::tag('div', Yii::t('merchant', 'There are no payments methods available'), ['class' => 'alert alert-danger']) ?>
                <?php else : ?>
	                <ul class="products-list product-list-in-box">
                        <?php foreach ($requests as $request) : ?>
                            <li class="item">
                                <?= PayButton::widget(compact('request')) ?>
                            </li>
                        <?php endforeach ?>
                    </ul>
                <?php endif ?>
            </div>
        </div>
    </div>
</div>

