<?php

$this->title = Yii::t('hisite', 'Terms & Conditions');

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
                    <li><a href="#GDPR" data-toggle="tab"><?= Yii::t('hipanel:pages', 'General Data Protection Regulation, GDPR') ?></a>
                    </li>
                    <li><a href="#cancelationPolicy"
                           data-toggle="tab"><?= Yii::t('hipanel:pages', 'Cancelation policy') ?></a>
                    </li>
                    <li><a href="#domainRemovalAndAutoRenewalPolicy"
                           data-toggle="tab"><?= Yii::t('hipanel:pages', 'Domain removal and auto renewal Policy') ?></a>
                    </li>
                    <li><a href="#domainNameRegistrationAgreement"
                        data-toggle="tab"><?= Yii::t('hipanel:pages', 'Domain Name Registration Agreement') ?></a>
                    </li>

                    <li>
                        <a href="https://www.icann.org/resources/pages/responsibilities-2014-03-14-en" data-toggle="tab"
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
                        <?= $this->render('_terms_of_use'); ?>
                    </div>

                    <div class="tab-pane fade" id="privacyPolicy">
                        <h4><?= Yii::t('hipanel:pages', 'Privacy Policy') ?></h4>
                        <hr class="small"/>
                        <?= $this->render('_privacy_policy'); ?>
                    </div>

                    <div class="tab-pane fade" id="GDPR">
                        <h4><?= Yii::t('hipanel:pages', 'General Data Protection Regulation, GDPR') ?></h4>
                        <hr class="small"/>
                        <?= $this->render('_gdpr'); ?>
                    </div>


                    <div class="tab-pane fade" id="cancelationPolicy">
                        <h4><?= Yii::t('hipanel:pages', 'Cancelation & Refunds') ?></h4>
                        <hr class="small"/>
                        <?= $this->render('_cancelation_policy'); ?>
                    </div>

                    <div class="tab-pane fade" id="domainRemovalAndAutoRenewalPolicy">
                        <h4><?= Yii::t('hipanel:pages', 'Domain removal and auto renewal Policy') ?></h4>
                        <hr class="small"/>
                        <?= $this->render('_removal_and_auto_renewal'); ?>
                    </div>
                    
                    <div class="tab-pane fade" id="domainNameRegistrationAgreement">
                        <h4><?= Yii::t('hipanel:pages', 'Domain Name Registration Agreement') ?></h4>
                        <hr class="small"/>
                        <?= $this->render('_registration_agreement'); ?>
                    </div>
                </div>
            </div>
	        <!-- END OF TABS -->

        </div>
    </div>
</div>
