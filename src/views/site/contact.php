<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = Yii::t('hisite', 'Help and feedback');

$this->blocks['subHeaderClass'] = 'contact';
$this->blocks['subTitle'] = Yii::t('hisite', 'Our friendly Support Team is available to help you 24 hours a day');
$this->registerCss(".help-block { font-size: 12px; }");
?>

<!-- CONTACT FORM -->
<div class="contact-elements">
    <div class="row">
        <div class="col-sm-3">
            <div class="contactmethod darkgray">
                <h5><?= Yii::t('hisite', 'Complaints / Abuse reports') ?></h5>
                <p><?= Yii::t('hisite', 'Notifications about spam, breaches of trademark, illegal or immoral activities of our clients: {0}', ['<br>' . Html::mailto('abuse@ahnames.com', 'abuse@ahnames.com')]) ?></p>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="contactmethod blue">
                <h5><?= Yii::t('hisite', 'Mailing Address') ?></h5>
                <p>
                    <?= Yii::$app->params['mailingAddress'] ?>
                </p>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="contactmethod green">
                <h5><?= Yii::t('hisite', 'Billing address') ?></h5>
                <p>
                    <?= Yii::$app->params['billingAddress'] ?>
                </p>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="contactmethod purple">
                <h5><?= Yii::t('hisite', 'Other contact information') ?></h5>
                <p>
                    <?= Yii::t('hisite', 'Sales') ?>: <?= Html::mailto('sales@ahnames.com', 'sales@ahnames.com') ?><br>
                    <?= Yii::t('hisite', 'Technical Support') ?>
                    : <?= Html::mailto('support@ahnames.com', 'support@ahnames.com') ?><br>

                    <?= Yii::t('hisite', 'Fast communication') ?>:<br>
                    <b>ICQ:</b> 593-341-721 <br>
                    <b>Skype:</b> ah.andre
                </p>
            </div>
        </div>
    </div>
    <div class="spacing-75"></div>

    <div class="row">

        <div class="col-sm-4">
            <h3><?= Yii::t('hisite', 'CONTACT {0}', [Yii::$app->name]) ?></h3>
            <div class="titleborder pink">
                <div class="titleborder_left"></div>
                <div class="titleborder_sign"></div>
            </div>
            <h4><?= Yii::t('hisite', 'Have questions?') ?></h4>
            <p>
                <?= Yii::t('hisite', 'Please note If you are already our customer and you require technical support, please open a support ticket in your {0}.', [
                    Html::a(Yii::t('hisite', 'control panel'), '#', ['target' => '_blank'])
                ]) ?>
            </p>
        </div>

        <div class="col-sm-8">
            <h3><?= Yii::t('hisite', 'GET IN TOUCH') ?></h3>
            <div class="titleborder pink fullwidth">
                <div class="titleborder_left"></div>
                <div class="titleborder_sign"></div>
            </div>
            <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>
                <div id="sendstatus">
                    <div class="alert alert-success">
                        <?= Yii::t('hisite', 'Thank you for contacting us. We will respond to you as soon as possible.') ?>
                    </div>
                </div>
            <?php else: ?>
                <div id="contactform">
                    <form method="post" action="sendmail.php" class="material">
                        <p><input type="text" class="form-control" name="name" id="name" placeholder="Name" tabindex="1" /></p>
                        <p><input type="text" class="form-control" name="email" id="email" placeholder="Email" tabindex="2" /></p>
                        <p><textarea class="form-control" name="comments" id="comments" cols="12" rows="6" placeholder="Message" tabindex="3"></textarea></p>
                        <p><input type="button" name="submit" id="submit" class="mtr-btn button-fab ripple" value="Send"/></p>
                    </form>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <!-- END OF CONTACT FORM -->
    <div class="spacing-75"></div>
