<?php

use hipanel\site\widgets\DomainPriceTable;
use hipanel\site\widgets\DomainSearchForm;
use yii\helpers\Html;

$this->title = Yii::t('hipanel:site:domain', 'Domain names search and registration');
$template = '<div class="row"><input type="hidden" name="direct" value="true"/><div class="col-sm-11">{field}</div><div class="col-sm-1"><button class="mtr-btn button-fab" type="submit"><i class="fa fa-search"></i></button></div></div>';
?>
<?php $this->beginBlock('subHeader') ?>
    <div class="domainavailability">
        <div class="row">
            <div class="col-sm-12 col-md-9 center-block">
                <?= Html::tag('h1', $this->title, ['class' => 'text-center']) ?>
                <div class="domain-form-container">
                    <?= DomainSearchForm::widget([
                        'template' => $template,
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
<?php $this->endBlock() ?>

<div class="domain-prices">
    <div class="row">
        <div class="row">
            <div class="col-sm-12">
                <?= DomainPriceTable::widget(compact('domains', 'promotion', 'domainZones')) ?>
            </div>
        </div>
    </div>
</div>
