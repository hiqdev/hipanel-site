<?php

use hiqdev\yii2\modules\pages\components\AdditionalPages;
use yii\helpers\Html;

$this->title = Yii::t('hisite', 'Terms & Conditions');
$registrarName = isset(Yii::$app->params['registrar.organization.name']) ? Yii::$app->params['registrar.organization.name'] : 'Danesco Trading, Ltd.';
$registrarUrl = isset(Yii::$app->params['registrar.organization.url']) ? Yii::$app->params['registrar.organization.url'] : 'www.danesconames.com';

?>
<?php
$this->title = Yii::t('hipanel:pages', 'Rules');
$this->registerCss('.vps-features-tabs .tabs-left-vertical > .nav-tabs > li > a { font-size: 12px; }');
$this->registerJs("
// It adds tab href to url + opens tab based on hash on page load
var hash = window.location.hash;
hash && $('ul.nav a[href=\"' + hash + '\"]').tab('show');
$('.nav-tabs a:not(.external)').click(function (e) {
    $(this).tab('show');
    var scrollmem = $('body').scrollTop() || $('html').scrollTop();
    window.location.hash = this.hash;
    $('html,body').scrollTop(scrollmem);
});
// Handle external tabs
$('.nav-tabs a.external').on('show.bs.tab', function (e) {
    e.preventDefault();
    var url = this.getAttribute('href'); 
    window.open(url);
});
// Footer link fix
$(document).on('click', '.social .text-center a', function(e) {
    var hash = this.hash;  
    if (hash) {
        $('ul.nav a[href=\"' + hash + '\"]').tab('show');
        $('html, body').animate({scrollTop: 0}, 600);
    }
});
");
?>
<div class="vps-features-tabs">
    <div class="row">
        <div class="col-sm-12">

            <!-- TABS -->
            <div class="tabbable tabs-left-vertical" data-wow-duration="1000ms" data-wow-delay="300ms">

                <ul class="nav nav-tabs">
                    <li class="active"><a href="#termsOfUse"
                                          data-toggle="tab"><?= Yii::t('hipanel:pages', 'Terms of use') ?></a>
                    </li>
                    <li><a href="#privacyPolicy" data-toggle="tab"><?= Yii::t('hipanel:pages', 'Privacy Policy') ?></a>
                    </li>
                    <li><a href="#vps_terms_of_use"
                           data-toggle="tab"><?= Yii::t('hipanel:pages', 'VPS terms of use') ?></a></li>
                    <li><a href="#GDPR"
                           data-toggle="tab"><?= Yii::t('hipanel:pages', 'General Data Protection Regulation, GDPR') ?></a>
                    </li>
                    <li><a href="#cancelationPolicy"
                           data-toggle="tab"><?= Yii::t('hipanel:pages', 'Cancelation policy') ?></a>
                    </li>
                    <li><a href="#domainRemovalAndAutoRenewalPolicy"
                           data-toggle="tab"><?= Yii::t('hipanel:pages', 'Domain removal and auto renewal Policy') ?></a>
                    </li>

                    <?php foreach (AdditionalPages::instantiate('additional.rules')->getPages() as $page) : ?>
                        <li>
                            <?= Html::a($page->getLabel(), '#' . $page->getId(), ['data' => ['toggle' => 'tab']]) ?>
                        </li>
                    <?php endforeach ?>

                    <li>
                        <a href="<?= Yii::$app->language === 'ru' ? "https://www.icann.org/resources/pages/benefits-2017-10-27-ru" : "https://www.icann.org/resources/pages/benefits-2013-09-16-en" ?>"
                           data-toggle="tab"
                           class="external">
                            <i class="fa fa-external-link-square lightblue"></i><?= Yii::t('hipanel:pages', 'Registrant rights and responsibilities') ?>
                        </a>
                    </li>

                    <li>
                        <a href="http://afilias.info/policies" data-toggle="tab" class="external">
                            <i class="fa fa-external-link-square lightblue"></i><?= Yii::t('hipanel:pages', 'Afilias Domain Anti-Abuse Policy') ?>
                        </a>
                    </li>

                </ul>

                <div class="tab-content">

                    <div class="tab-pane fade in active" id="termsOfUse">
                        <h4><?= Yii::t('hipanel:pages', 'Terms of use') ?></h4>
                        <hr class="small"/>
                        <?= $this->render('_terms_of_use') ?>
                    </div>

                    <div class="tab-pane fade" id="privacyPolicy">
                        <h4><?= Yii::t('hipanel:pages', 'Privacy Policy') ?></h4>
                        <hr class="small"/>
                        <?= $this->render('_privacy_policy') ?>
                    </div>

                    <div class="tab-pane fade" id="vps_terms_of_use">
                        <h4><?= Yii::t('hipanel:pages', 'VPS terms of use') ?></h4>
                        <hr class="small"/>
                        <?= $this->render('_vps_terms_of_use') ?>
                    </div>

                    <div class="tab-pane fade" id="GDPR">
                        <h4><?= Yii::t('hipanel:pages', 'General Data Protection Regulation, GDPR') ?></h4>
                        <hr class="small"/>
                        <?= $this->render('_gdpr', compact('registrarName')) ?>
                    </div>

                    <div class="tab-pane fade" id="cancelationPolicy">
                        <h4><?= Yii::t('hipanel:pages', 'Cancelation & Refunds') ?></h4>
                        <hr class="small"/>
                        <?= $this->render('_cancelation_policy') ?>
                    </div>

                    <div class="tab-pane fade" id="domainRemovalAndAutoRenewalPolicy">
                        <h4><?= Yii::t('hipanel:pages', 'Domain removal and auto renewal Policy') ?></h4>
                        <hr class="small"/>
                        <?= $this->render('_removal_and_auto_renewal') ?>
                    </div>

                    <?php foreach (AdditionalPages::instantiate('additional.rules')->getPages() as $page) : ?>
                        <div class="tab-pane fade" id="<?= $page->getId() ?>">
                            <h4><?= $page->getLabel() ?></h4>
                            <hr class="small"/>
                            <?= $page->render() ?>
                        </div>
                    <?php endforeach ?>

                </div>
            </div>

        </div>
    </div>
</div>
