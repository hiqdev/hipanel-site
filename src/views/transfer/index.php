<?php

use hipanel\modules\domain\models\Domain;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;
use yii\grid\GridView;
use yii\helpers\Url;

$this->title = Yii::t('hipanel/domain', 'Domain transfer');


$this->registerCss('
.step {
    font: 28px/24px "RobotoBold",Arial,sans-serif;
    color: #c7c7c7;
    margin-bottom: 1em;
    text-align: center;
}

');
$this->registerJs(<<<JS
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        $('#' + e.relatedTarget.getAttribute('href').substr(1)).find('input:text, textarea').val('');
    });
JS
);
$id = $model->id ?: 0;
?>
<div class="lg-pt-50 lg-pb-50">
    <?php if (!Yii::$app->session->getFlash('transferGrid')) : ?>
        <?php $form = ActiveForm::begin([
            'id' => 'domain-transfer-single',
            'action' => ['index'],
            'enableAjaxValidation' => true,
            'enableClientValidation' => false,
            'validationUrl' => Url::toRoute(['validate-form', 'scenario' => $model->scenario]),
        ]) ?>

        <div class="row">
            <div class="col-lg-6 or-border">
                <h2><?= Yii::t('hipanel/domain', 'Single domain transfer') ?></h2>
                <div class="titleborder pink">
                    <div class="titleborder_left"></div>
                    <div class="titleborder_sign"></div>
                </div>

                <div class="row">
                    <div class="col-md-1 step">1.</div>
                    <div
                        class="col-md-11"><?= Yii::t('hipanel/domain', 'Remove WHOIS protection from the current registrar.') ?></div>
                </div>
                <div class="row">
                    <div class="col-md-1 step">2.</div>
                    <div class="col-md-7">
                        <div class="form-group">
                            <?= $form->field($model, "[$id]domain"); ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <?= $form->field($model, "[$id]password"); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1 step">3.</div>
                    <div class="col-md-11">
                        <?= Yii::t('hipanel/domain', 'An email was sent to your email address specified in Whois. To start the transfer, click on the link in the email.') ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h2><?= Yii::t('hipanel/domain', 'Bulk domain transfer') ?></h2>
                <div class="titleborder pink">
                    <div class="titleborder_left"></div>
                    <div class="titleborder_sign"></div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <?= $form->field($model, "[$id]domains")->textarea(['rows' => 7]); ?>
                    </div>
                    <div class="col-md-12 lg-mt-20 md-mt-20 sm-mt-20">
                        <p class="help-block">
                            <?= Yii::t('hipanel/domain', 'For separation of the domain and code use a space, a comma or a semicolon.') ?>
                            <?= Yii::t('hipanel/domain', 'Example') ?>:<br>
                            <b>yourdomain.com uGt6shlad</b><br>
                            <?= Yii::t('hipanel/domain', 'or') ?><br>
                            <b>yourdomain.com, uGt6shlad</b><br>
                            <?= Yii::t('hipanel/domain', 'or') ?><br>
                            <b>yourdomain.com; uGt6shlad</b><br>
                            <?= Yii::t('hipanel/domain', 'each pair (domain + code) should be written with a new line') ?>
                        </p>
                    </div>

                </div>
            </div>
            <div class="col-lg-6">
                <hr>
                <?= Html::submitButton('<i class="fa fa-paper-plane"></i>&nbsp;&nbsp;' . Yii::t('hipanel/domain', 'Transfer'), ['class' => 'mtr-btn button-blue ripple has-ripple']); ?>
            </div>
            <div class="col-lg-6">
                <hr>
                <?= Html::submitButton('<i class="fa fa-paper-plane"></i>&nbsp;&nbsp;' . Yii::t('hipanel/domain', 'Bulk domain transfer'), ['class' => 'mtr-btn button-blue ripple has-ripple']); ?>
            </div>


        </div>
        <?php ActiveForm::end() ?>
    <?php else : ?>
        <?= Html::beginForm(['add-to-cart-transfer']) ?>

        <div class="row">
            <div class="col-lg-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h2 class="box-title"><?= Yii::t('hipanel/domainchecker', 'Starting the transfer procedure for the following domains'); ?></h2>
                        <div class="titleborder pink">
                            <div class="titleborder_left"></div>
                            <div class="titleborder_sign"></div>
                        </div>
                    </div>
                    <div class="box-body">
                        <?= GridView::widget([
                            'dataProvider' => $transferDataProvider,
                            'tableOptions' => [
                                'class' => 'table',
                            ],
                            'layout' => "{items}\n{pager}",
                            'rowOptions' => function ($model) {
                                return ['class' => $model->hasErrors('password') ? 'danger' : ''];
                            },
                            'columns' => [
                                [
                                    'attribute' => 'domain',
                                    'format' => 'raw',
                                    'value' => function ($model, $key, $i) {
                                        $html = Html::tag('span', $model->domain, ['class' => 'text-bold']);
                                        /** @var Domain $model */
                                        if (!$model->hasErrors('password')) {
                                            $html .= Html::hiddenInput("DomainTransferProduct[$i][name]", $model->domain);
                                        }
                                        return $html;
                                    },
                                ],
                                [
                                    'attribute' => 'password',
                                    'format' => 'raw',
                                    'value' => function ($model, $key, $i) {
                                        $html = $model->password;
                                        /** @var Domain $model */
                                        if (!$model->hasErrors('password')) {
                                            $html .= Html::hiddenInput("DomainTransferProduct[$i][password]", $model->password);
                                        }

                                        return $html;
                                    },
                                ],
                                [
                                    'label' => Yii::t('hipanel/domain', 'Additional message'),
                                    'value' => function ($model) {
                                        /* @var Domain $model */
                                        return $model->hasErrors('password') ? $model->getFirstError('password') : '';
                                    },
                                ],
                            ],
                        ]); ?>
                    </div>
                    <div class="box-footer lg-pt-50 lg-pb-50">
                        <?= Html::submitButton('<i class="fa fa-shopping-cart"></i> ' . Yii::t('hipanel/domain', 'Add to cart'), ['class' => 'btn btn-success no-radius btn-lg used']) ?>
                        <?= Html::a(Yii::t('hipanel/domain', 'Return to transfer form'), ['index'], ['class' => 'btn btn-default no-radius btn-lg used']) ?>
                    </div>
                    <!-- /.box-footer -->
                </div>
            </div>
        </div>
        <?= Html::endForm(); ?>
    <?php endif; ?>
</div>
