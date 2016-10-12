<?php

/* @var $this yii\web\View */
/* @var $thread \hipanel\site\models\Thread */
/* @var $form yii\bootstrap\ActiveForm */

use hipanel\helpers\Url;
use hiqdev\thememanager\widgets\FancyPanel;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = Yii::t('hipanel:site:pages', 'Help and feedback');

$this->blocks['subHeaderClass'] = 'about';
$this->blocks['subTitle'] = Yii::t('hipanel:site:pages', 'Our friendly Support Team is available to help you 24 hours a day');
$this->registerCss(".help-block { font-size: 12px; }");
?>

<!-- CONTACT FORM -->
<div class="contact-elements">
    <div class="row">
        <div class="col-sm-4">
            <?php $panel = FancyPanel::begin([
                'title' => Yii::t('hipanel:site:pages', 'Complaints / Abuse reports'),
            ]) ?>
            <?php $panel->beginBody() ?>
            <?= Yii::t('hipanel:site:pages', 'Notifications about spam, breaches of trademark, illegal or immoral activities of our clients:') ?>
            <br>
            <?= Html::mailto(Yii::$app->params['abuseEmail'], Yii::$app->params['abuseEmail']) ?>
            <?php $panel->endBody() ?>
            <?php FancyPanel::end() ?>
        </div>

        <div class="col-sm-4">
            <?php $panel = FancyPanel::begin([
                'color' => 'blue',
                'title' => Yii::t('hipanel:site:pages', 'Support information'),
            ]) ?>
            <?php $panel->beginBody() ?>
            <?= Html::mailto(Yii::$app->params['supportEmail'], Yii::$app->params['supportEmail']) ?>
            <?php $panel->endBody() ?>
            <?php FancyPanel::end() ?>
        </div>

        <div class="col-sm-4">
            <?php $panel = FancyPanel::begin([
                'color' => 'purple',
                'title' => Yii::t('hipanel:site:pages', 'Sales'),
            ]) ?>
            <?php $panel->beginBody() ?>
            <?= Html::mailto(Yii::$app->params['salesEmail'], Yii::$app->params['salesEmail']) ?>
            <?php $panel->endBody() ?>
            <?php FancyPanel::end() ?>
        </div>
    </div>
    <div class="spacing-75"></div>

    <div class="row">

        <div class="col-sm-4">
            <h3><?= Yii::t('hipanel:site:pages', 'CONTACT {0}', [Yii::$app->name]) ?></h3>
            <div class="titleborder pink">
                <div class="titleborder_left"></div>
                <div class="titleborder_sign"></div>
            </div>
            <h4><?= Yii::t('hipanel:site:pages', 'Have questions?') ?></h4>
            <p>
                <?= Yii::t('hipanel:site:pages', 'Please review the list of <a href="{url}">frequently asked questions</a> before contacting customer support.', ['url' => Url::to(['/pages/faq'])]) ?>
            </p>
            <p>
               <?= Yii::t('hipanel:site:pages', 'Please note If you are already our customer and you require technical support, please open a support ticket in your <a href="{url}">control panel</a>.', ['url' => Url::to('#')]) ?>
            </p>
        </div>

        <div class="col-sm-8">
            <h3><?= Yii::t('hipanel:site:pages', 'GET IN TOUCH') ?></h3>
            <div class="titleborder pink fullwidth">
                <div class="titleborder_left"></div>
                <div class="titleborder_sign"></div>
            </div>
            <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>
                <div id="sendstatus">
                    <div class="alert alert-success">
                        <?= Yii::t('hipanel:site:pages', 'Thank you for contacting us. We will respond to you as soon as possible.') ?>
                    </div>
                </div>
            <?php else: ?>
                <div id="contactform">
                    <?php $form = ActiveForm::begin([
                        'id' => 'submit-ticket',
                        'action' => Url::toRoute('/site/ticket-submit'),
                        'options' => [
                            'class' => 'material'
                        ],
                        'fieldConfig' => [
                            'template' => "{input}\n{hint}\n{error}",
                        ],
                    ]) ?>
                    <?= $form->field($thread, 'anonym_name')->textInput([
                        'name' => 'anonym_name',
                        'id' => 'anonym_name',
                        'placeholder' => $thread->getAttributeLabel('anonym_name'),
                    ]) ?>
                    <?= $form->field($thread, 'anonym_email')->textInput([
                        'name' => 'anonym_email',
                        'id' => 'anonym_email',
                        'placeholder' => $thread->getAttributeLabel('anonym_email'),
                    ]) ?>
                    <?= $form->field($thread, 'subject')->textInput([
                        'name' => 'subject',
                        'id' => 'subject',
                        'placeholder' => $thread->getAttributeLabel('subject'),
                    ]) ?>
                    <?= $form->field($thread, 'message')->textarea([
                        'name' => 'message',
                        'id' => 'message',
                        'placeholder' => $thread->getAttributeLabel('message'),
                    ]) ?>
                    <?= Html::submitButton(Yii::t('hipanel:site:pages', 'Submit'), ['id' => 'submit', 'class' => 'mtr-btn button-fab ripple']) ?>
                    <?php ActiveForm::end() ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <!-- END OF CONTACT FORM -->
    <div class="spacing-75"></div>
</div>
