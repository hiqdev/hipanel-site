<?php

use hipanel\modules\domain\models\Domain;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;
use yii\grid\GridView;
use yii\helpers\Url;

$this->title = Yii::t('hipanel:domain', 'Domain transfer');
$this->params['breadcrumbs'][] = $this->title;
$this->blocks['subHeaderClass'] = 'shared';

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
                <h2><?= Yii::t('hipanel:domain', 'Single domain transfer') ?></h2>
                <div class="titleborder pink">
                    <div class="titleborder_left"></div>
                    <div class="titleborder_sign"></div>
                </div>

                <div class="row">
                    <div class="col-md-1 step">1.</div>
                    <div
                        class="col-md-11"><?= Yii::t('hipanel:domain', 'Remove WHOIS protection from the current registrar.') ?></div>
                </div>
                <div class="row">
                    <div class="col-md-1 step">2.</div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <?= $form->field($model, "[$id]domain"); ?>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <?= $form->field($model, "[$id]password"); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1 step">3.</div>
                    <div class="col-md-11">
                        <?= Yii::t('hipanel:domain', 'An email was sent to your email address specified in Whois. To start the transfer, click on the link in the email.') ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h2><?= Yii::t('hipanel:domain', 'Bulk domain transfer') ?></h2>
                <div class="titleborder pink">
                    <div class="titleborder_left"></div>
                    <div class="titleborder_sign"></div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <?= $form->field($model, "[$id]domains")->textarea(['rows' => 7]); ?>
                    </div>
                    <div class="col-md-12 lg-mt-20 md-mt-20 sm-mt-20">
                        <p class="help-block bg-info" style="padding: 1em;">
                            <?= Yii::t('hipanel:domain', 'For separation of the domain and code use a space, a comma or a semicolon.') ?>
                            <?= Yii::t('hipanel:domain', 'Example') ?>:<br>
                            <b>yourdomain.com uGt6shlad</b><br>
                            <?= Yii::t('hipanel:domain', 'or') ?><br>
                            <b>yourdomain.com, uGt6shlad</b><br>
                            <?= Yii::t('hipanel:domain', 'or') ?><br>
                            <b>yourdomain.com; uGt6shlad</b><br>
                            <?= Yii::t('hipanel:domain', 'each pair (domain + code) should be written with a new line') ?>
                        </p>
                    </div>

                </div>
            </div>
            <div class="col-lg-6">
                <hr>
                <?= Html::submitButton('<i class="fa fa-paper-plane"></i>&nbsp;&nbsp;' . Yii::t('hipanel:domain', 'Transfer'), ['class' => 'mtr-btn button-blue ripple has-ripple']); ?>
            </div>
            <div class="col-lg-6">
                <hr>
                <?= Html::submitButton('<i class="fa fa-paper-plane"></i>&nbsp;&nbsp;' . Yii::t('hipanel:domain', 'Bulk domain transfer'), ['class' => 'mtr-btn button-blue ripple has-ripple']); ?>
            </div>


        </div>
        <?php ActiveForm::end() ?>
    <?php else : ?>
        <?= Html::beginForm(['add-to-cart-transfer']) ?>

        <div class="row">
            <div class="col-lg-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h2 class="box-title"><?= Yii::t('hipanel:domain', 'Starting the transfer procedure for the following domains'); ?></h2>
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
                                    'label' => Yii::t('hipanel:domain', 'Additional message'),
                                    'value' => function ($model) {
                                        /* @var Domain $model */
                                        return $model->hasErrors('password') ? $model->getFirstError('password') : '';
                                    },
                                ],
                            ],
                        ]); ?>
                    </div>
                    <div class="box-footer lg-pt-50 lg-pb-50">
                        <?= Html::submitButton('<i class="fa fa-shopping-cart"></i> ' . Yii::t('hipanel:domain', 'Add to cart'), ['class' => 'btn btn-success no-radius btn-lg used']) ?>
                        <?= Html::a(Yii::t('hipanel:domain', 'Return to transfer form'), ['index'], ['class' => 'btn btn-default no-radius btn-lg used']) ?>
                    </div>
                    <!-- /.box-footer -->
                </div>
            </div>
        </div>
        <?= Html::endForm(); ?>
    <?php endif; ?>
</div>
<div class="about-descr">
    <div class="row">
        <div class="col-sm-12 col-md-10 center-block">
            <h3><?= Yii::t('hipanel:site:transfer', 'What is a domain transfer?') ?></h3>
            <div class="titleborder centered">
                <div class="titleborder_left"></div>
                <div class="titleborder_sign"></div>
                <div class="titleborder_right"></div>
            </div>
        </div>
    </div>

    <div class="row spacing-25">
        <div class="col-md-12">
            <p class="topspacing">
                <?= Yii::t('hipanel:site:transfer', 'Domain Transfer - is an operation associated with the transfer of domain services to another registrar. When you transfer a domain, it is automatically extended for one year.') ?>
                <br>
                <?= Yii::t('hipanel:site:transfer', 'The operation of transferring a domain is free of charge. You only pay for the extension of the domain for 1 year.') ?>
            </p>
            <p>
                <?= Yii::t('hipanel:site:transfer', 'When completing a domain transfer, it is carried out automatically, subject to the following rules: The domain must have a status of "OK" or «ACTIVE» and should be more than 60 days from the date of registration.') ?>
                <br>
                <?= Yii::t('hipanel:site:transfer', 'Check all the components of this rule on this page: {url}', ['url' => Html::a(Yii::t('hipanel:domain', 'WHOIS lookup'), ['/domain/whois/index'])]) ?>
            </p>
            <p>
                <?= Yii::t('hipanel:site:transfer', 'To start the domain transfer procedure you should ask for your current registrar domain secret code (for different registrars, it may be called differently: auth-code, epp domain code, secret authorization code).') ?>
            </p>
            <p>
                <?= Yii::t('hipanel:site:transfer', 'Once you get the necessary data, add them to the appropriate form on the top of the page.') ?>
            </p>
            <div class="alert alert-danger alert-dismissible fade in" role="alert">
                <h4><?= Yii::t('hipanel:site:transfer', 'Attention!') ?></h4>
                <p>
                    <?= Yii::t('hipanel:site:transfer', 'Domain transfer procedure was changed according to ICANN requirements.') ?>
                    <br>
                    <strong><?= Yii::t('hipanel:site:transfer', 'Transfer will not start until you approve the request.') ?></strong>
                    <br>
                    <?= Yii::t('hipanel:site:transfer', 'To proceed with the transfer you have to approve the transfer by following the link in the mail which was sent to email listed as Registered Name Holder or Administrative contact for this domain in the WHOIS database!') ?>
                    <br>
                    <?= Yii::t('hipanel:site:transfer', 'If you don\'t receive the mail from us, please check WHOIS information of the corresponding domain and actualize contact data or disable WHOIS-protect if needed.') ?>
                    <br>
                    <?= Yii::t('hipanel:site:transfer', 'More information on domain transfer process can be found on <a href="http://www.icann.org/en/resources/registrars/transfers">ICANN site</a> and especially in <a href="http://www.icann.org/en/resources/registrars/transfers/policy">Policy on Transfer of Registrations between Registrars</a>.') ?>
                </p>
            </div>
            <p>
                <?= Yii::t('hipanel:site:transfer', 'If the domain is one of the reseller registrar: EvoNames, the transfer of the domain inside the panel will be by means of the operation "push". ') ?>
            </p>
            <p class="text-muted">
                <b>*</b> <?= Yii::t('hipanel:site:transfer', 'Some registrars impose additional conditions to carry out the transfer. If you have carried out all of the suggested activities, but the domain transfer has not been initiated, please contact our technical support team for more assistance.') ?>
            </p>
        </div>
    </div>
</div>
