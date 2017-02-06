<?php

use hipanel\site\widgets\DomainPriceTable;
use hipanel\site\widgets\DomainSearchForm;
use yii\helpers\Html;

$this->title = Yii::t('hipanel:site:domain', 'Domain names search and registration');
$this->params['breadcrumbs'][] = $this->title;
$this->registerJs("
$('#showdomainsearch').click(function() {
    $('.domainform').slideToggle(\"slow\");
});
");
?>
<?php $this->beginBlock('subHeader') ?>
    <div class="domainavailability">
        <div class="row">
            <div class="col-sm-12 col-md-9 center-block">
                <?= Html::tag('h1', $this->title, ['class' => 'text-center']) ?>
                <div class="domain-form-container">
                    <?= DomainSearchForm::widget() ?>
                </div>
            </div>
        </div>
    </div>
<?php $this->endBlock() ?>
<div class="domaintlds">
    <div class="row">
        <div class="col-sm-12">
            <h2 class="text-center"><?= Yii::t('hipanel:site:domain', 'Domain pricing') ?></h2>
            <div class="titleborder centered">
                <div class="titleborder_left"></div>
                <div class="titleborder_sign"></div>
                <div class="titleborder_right"></div>
            </div>
            <p class="text-center subtitle">
                <?= Yii::t('hipanel:site:domain', 'Today our company, offers the most competitive and fair prices for domain registration services. Due to the large number of domains that are in our care, we get a significant discount from our registrar. This creates a very positive impact on the price of domain names offered to you!') ?> </p>
        </div>
    </div>
</div>

<div class="domain-prices">
    <div class="row">
        <?= DomainPriceTable::widget() ?>
    </div>
</div>

<div class="domain-features-text">
    <div class="row">
        <div class="col-sm-6">
            <h4><?= Yii::t('hipanel:site:domain', 'PAYMENT METHODS') ?></h4>
        </div>
        <div class="col-sm-6">
            <p><?= Yii::t('hipanel:site:domain', 'We accept the following automatic payment methods') ?>:
                <noindex>
                    <a rel="nofollow" target="_blank" href="http://www.webmoney.ru/">WebMoney</a>,
                    <a rel="nofollow" target="_blank" href="https://www.paypal.com/nl/webapps/mpp/home">PayPal</a>,
                    <a rel="nofollow" target="_blank" href="http://epayservices.com/">ePayService</a>,
                    <a rel="nofollow" target="_blank" href="http://ecoin.cc/">eCoin</a>,
                    <a rel="nofollow" href="https://www.paxum.com/payment/index.php?view=views/index.xsl">Paxum</a>,
                    <a rel="nofollow" target="_blank" href="https://www.interkassa.com/">InterKassa</a>
                </noindex>
                <?= Yii::t('hipanel:site:domain', 'as well as PayPal payments from your Visa and MasterCard') ?>
            </p>
        </div>
    </div>
</div>

