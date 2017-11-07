<?php

use hipanel\modules\finance\widgets\AvailableMerchants;
use hipanel\site\widgets\DomainPriceTable;

/** @var array $availableMerchants */
$this->title = Yii::t('hipanel:site:domain', 'Domain names search and registration');
?>
<?php $this->beginBlock('subHeader') ?>
    <?= $this->render('//site/_domainSearchForm', ['model' => $model]) ?>
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
        <div class="row">
            <div class="col-sm-12">
                <?= DomainPriceTable::widget(compact('domains', 'promotion', 'domainZones')) ?>
            </div>
        </div>
    </div>
</div>

<div class="domain-features-text">
    <div class="row">
        <div class="col-sm-6">
            <h4><?= Yii::t('hipanel:site:domain', 'PAYMENT METHODS') ?></h4>
        </div>
        <div class="col-sm-6">
            <p class="text-justify">
                <?= Yii::t('hipanel:site:domain', 'We accept the following automatic payment methods') ?>:
                <?= AvailableMerchants::widget(['merchants' => $availableMerchants]) ?>
                <?= Yii::t('hipanel:site:domain', 'as well as PayPal payments from your Visa and MasterCard') ?>
            </p>
        </div>
    </div>
</div>


