<?php

use hiqdev\yii2\merchant\widgets\PayButton;
use yii\helpers\Html;

$this->title = Yii::t('merchant', 'Select payment method');
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="row">
    <div class="col-md-offset-3 col-md-6">
        <div class="panel <?= empty($requests) ? 'panel-danger' : '' ?>">
            <div class="panel-body">
                <?php if (empty($requests)) : ?>
                    <?= Html::tag('div', Yii::t('merchant', 'There are no payments methods available'), ['class' => 'alert alert-danger']) ?>
                <?php else : ?>
                    <?php foreach ($requests as $request) : ?>
                        <?= PayButton::widget(compact('request')) ?>
                        <br/>
                    <?php endforeach ?>
                <?php endif ?>
            </div>
        </div>
    </div>
</div>

