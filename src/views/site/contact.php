<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

use hiqdev\thememanager\widgets\FancyPanel;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = Yii::t('hipanel/site/pages', 'Help and feedback');

$this->blocks['subHeaderClass'] = 'about';
$this->blocks['subTitle'] = Yii::t('hipanel/site/pages', 'Our friendly Support Team is available to help you 24 hours a day');
$this->registerCss(".help-block { font-size: 12px; }");
?>

<!-- CONTACT FORM -->
<div class="contact-elements">
    <div class="row">
        <div class="col-sm-4">
            <?php $panel = FancyPanel::begin([
                'title' => Yii::t('hipanel/site/pages', 'Complaints / Abuse reports'),
            ]) ?>
            <?php $panel->beginBody() ?>
            <?= Yii::t('hipanel/site/pages', 'Notifications about spam, breaches of trademark, illegal or immoral activities of our clients: {0}', ['<br>' . Html::mailto('abuse@ahnames.com', 'abuse@ahnames.com')]) ?>
            <?php $panel->endBody() ?>
            <?php FancyPanel::end() ?>
        </div>

        <div class="col-sm-4">
            <?php $panel = FancyPanel::begin([
                'color' => 'blue',
                'title' => Yii::t('hipanel/site/pages', 'Complaints / Abuse reports'),
            ]) ?>
            <?php $panel->beginBody() ?>
            <?= Yii::$app->params['mailingAddress'] ?>
            <?php $panel->endBody() ?>
            <?php FancyPanel::end() ?>
        </div>

        <div class="col-sm-4">
            <?php $panel = FancyPanel::begin([
                'color' => 'purple',
                'title' => Yii::t('hipanel/site/pages', 'Other contact information'),
            ]) ?>
            <?php $panel->beginBody() ?>
            <?= Yii::t('hipanel/site/pages', 'Sales') ?>: <?= Html::mailto('sales@ahnames.com', 'sales@ahnames.com') ?>
            <br>
            <?= Yii::t('hipanel/site/pages', 'Technical Support') ?>
            : <?= Html::mailto('support@ahnames.com', 'support@ahnames.com') ?><br>

            <?= Yii::t('hipanel/site/pages', 'Fast communication') ?>:<br>
            <b>ICQ:</b> 593-341-721 <br>
            <b>Skype:</b> ah.andre
            <?php $panel->endBody() ?>
            <?php FancyPanel::end() ?>
        </div>
    </div>
    <div class="spacing-75"></div>

    <div class="row">

        <div class="col-sm-4">
            <h3><?= Yii::t('hipanel/site/pages', 'CONTACT {0}', [Yii::$app->name]) ?></h3>
            <div class="titleborder pink">
                <div class="titleborder_left"></div>
                <div class="titleborder_sign"></div>
            </div>
            <h4><?= Yii::t('hipanel/site/pages', 'Have questions?') ?></h4>
            <p>
                <?= Yii::t('hipanel/site/pages', 'Please note If you are already our customer and you require technical support, please open a support ticket in your {0}.', [
                    Html::a(Yii::t('hipanel/site/pages', 'control panel'), '#', ['target' => '_blank'])
                ]) ?>
            </p>
        </div>

        <div class="col-sm-8">
            <h3><?= Yii::t('hipanel/site/pages', 'GET IN TOUCH') ?></h3>
            <div class="titleborder pink fullwidth">
                <div class="titleborder_left"></div>
                <div class="titleborder_sign"></div>
            </div>
            <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>
                <div id="sendstatus">
                    <div class="alert alert-success">
                        <?= Yii::t('hipanel/site/pages', 'Thank you for contacting us. We will respond to you as soon as possible.') ?>
                    </div>
                </div>
            <?php else: ?>
                <div id="contactform">
                    <form method="post" action="sendmail.php" class="material">
                        <p><input type="text" class="form-control" name="name" id="name" placeholder="Name"
                                  tabindex="1"/></p>
                        <p><input type="text" class="form-control" name="email" id="email" placeholder="Email"
                                  tabindex="2"/></p>
                        <p><textarea class="form-control" name="comments" id="comments" cols="12" rows="6"
                                     placeholder="Message" tabindex="3"></textarea></p>
                        <p><input type="button" name="submit" id="submit" class="mtr-btn button-fab ripple"
                                  value="Send"/></p>
                    </form>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <!-- END OF CONTACT FORM -->
    <div class="spacing-75"></div>
</div>
