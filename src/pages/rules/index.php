<?php

$this->title = Yii::t('hisite', 'Terms & Conditions');

?>
<?php
$this->title = Yii::t('hipanel/pages', 'Rules');
$this->registerCss(".vps-features-tabs .tabs-left-vertical > .nav-tabs > li > a { font-size: 12px; }");
?>
<div class="vps-features-tabs">
    <div class="row">
        <div class="col-sm-12">

            <!-- TABS -->
            <div class="tabbable tabs-left-vertical" data-wow-duration="1000ms" data-wow-delay="300ms">

                <ul class="nav nav-tabs">
                    <li class="active"><a href="#termsOfUse"
                                          data-toggle="tab"><?= Yii::t('hipanel/pages', 'Domains terms of use') ?></a>
                    </li>
                    <li><a href="#privacyPolicy" data-toggle="tab"><?= Yii::t('hipanel/pages', 'Privacy Policy') ?></a>
                    </li>
                    <li><a href="#cancelationPolicy"
                           data-toggle="tab"><?= Yii::t('hipanel/pages', 'Cancelation policy') ?></a>
                    </li>
                    <li><a href="#domainRemovalAndAutoRenewalPolicy"
                           data-toggle="tab"><?= Yii::t('hipanel/pages', 'Domain removal and auto renewal Policy') ?></a>
                    </li>
                </ul>

                <div class="tab-content">

                    <div class="tab-pane fade in active" id="termsOfUse">
                        <h4><?= Yii::t('hipanel/pages', 'Domains terms of use') ?></h4>
                        <hr class="small"/>
                        <?= $this->render('_terms_of_use'); ?>
                    </div>

                    <div class="tab-pane fade" id="privacyPolicy">
                        <h4><?= Yii::t('hipanel/pages', 'Privacy Policy') ?></h4>
                        <hr class="small"/>
                        <?= $this->render('_privacy_policy'); ?>
                    </div>

                    <div class="tab-pane fade" id="cancelationPolicy">
                        <h4><?= Yii::t('hipanel/pages', 'Cancelation & Refunds') ?></h4>
                        <hr class="small"/>
                        <?= $this->render('_cancelation_policy'); ?>
                    </div>

                    <div class="tab-pane fade" id="domainRemovalAndAutoRenewalPolicy">
                        <h4><?= Yii::t('hipanel/pages', 'Domain removal and auto renewal Policy') ?></h4>
                        <hr class="small"/>
                        <p class="subtitle"><?= Yii::t('hipanel/pages', 'Capacity building insurmountable challenges, Andrew Carnegie rural development') ?></p>
                        <?= $this->render('_removal_and_auto_renewal'); ?>
                    </div>

                </div>
            </div>
            <!-- END OF TABS -->

        </div>
    </div>
</div>

<a href="https://www.icann.org/resources/pages/responsibilities-2014-03-14-en" target="_blank" data-toggle="tab"><i
        class="fa fa-check-square-o lightblue"></i><?= Yii::t('hipanel/pages', 'Registrant rights and responsibilities') ?>
</a>
<a href="http://afilias.info/policies" target="_blank" data-toggle="tab"><i
        class="fa fa-gratipay orange"></i><?= Yii::t('hipanel/pages', 'Afilias Domain Anti-Abuse Policy') ?></a>
