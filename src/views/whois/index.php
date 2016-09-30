<?php

/** @var string $domain */
/** @var array $availableZones */
/** @var \hipanel\modules\domain\models\Whois $model */
/** @var \yii\web\View $this */

use hipanel\modules\domain\assets\WhoisAsset;
use hipanel\site\widgets\WhoisLookupForm;
use hipanel\widgets\ArraySpoiler;
use yii\bootstrap\Html;

$this->title = Yii::t('hipanel/domain', 'WHOIS lookup');

$this->registerCss("
#whois-lookup h2 {
    text-align: center;
    color: #fff;
    font-weight: 400;
    font-size: 16px;
    margin-top: 15px;
}
");
if ($model->domain !== null) {
    WhoisAsset::register($this);
    $this->registerJs("$('#whois').whois({domain: '{$model->domain}'});");
}
?>

<?php $this->beginBlock('subHeader') ?>
    <div id="whois-lookup" class="domainavailability">
        <div class="row">
            <div class="col-sm-12 col-md-9 center-block">
                <?= Html::tag('h1', $this->title, ['class' => 'text-center']) ?>
                <div class="domain-form-container">
                    <?= WhoisLookupForm::widget(['model' => $model]) ?>
                </div>
                <div class="clearfix"></div>
                <?= Html::tag('h2', Yii::t('hipanel/domain', 'Available zones') .
                    ': ' .
                    ArraySpoiler::widget(['data' => $availableZones, 'visibleCount' => count($availableZones)])) ?>
            </div>
        </div>
    </div>
<?php $this->endBlock() ?>

<div class="row">
    <div class="col-md-3 col-sm-12 col-xs-12">
        <div class="box box-solid">
            <div class="box-body">
                <div class="bg-warning md-mt-10" style="padding: 5px 7px">
                    <span class="text-bold"><?= Yii::t('hipanel/domain', 'Available zones') ?>:</span><br>
                </div>
                <p class="md-mt-20">
                    <?= Yii::t('hipanel/domain', 'WHOIS isn’t an acronym, though it may look like one. In fact, it is the system that provides information, who is responsible for a domain name.') ?>
                </p>
            </div>
        </div>
    </div>

    <div class="col-md-9 col-sm-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                    <?= Yii::t('hipanel/domain', 'Whois lookup result') ?>
                </h3>
                <div class="box-tools pull-right">
                </div>
            </div>
            <div class="box-body">
                <?php if (!$model->domain) : ?>
                    <div class="mailbox-read-message text-center">
                        <?= Yii::t('hipanel/domain', 'You could check whois information here. Just enter domain in the form input.') ?>
                    </div>
                    <?php else: ?>
                    <div id="whois">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100"
                                 aria-valuemin="0"
                                 aria-valuemax="100" style="width: 100%">
                            </div>
                        </div>
                    </div>
                <?php endif ?>
            </div>
        </div>

    </div>
</div>


