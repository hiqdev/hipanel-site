<?php

/** @var string $domain */
/** @var array $availableZones */
/** @var \hipanel\modules\domain\models\Whois $model */
/** @var \yii\web\View $this */

use hipanel\modules\domain\assets\WhoisAsset;
use hipanel\site\widgets\WhoisLookupForm;
use hipanel\widgets\ArraySpoiler;
use yii\bootstrap\Html;

$this->title = Yii::t('hipanel:domain', 'WHOIS lookup');
$this->params['breadcrumbs'][] = $this->title;

$this->registerCss("
#whois-lookup h2 {
    text-align: center;
    color: #fff;
    font-weight: 400;
    font-size: 16px;
    margin-top: 15px;
}
.progress {
    height: 20px;
}
");
if ($model->domain !== null) {
    WhoisAsset::register($this);
    $this->registerJs("$('#whois').whois({domain: '{$model->domain}'});");
}
?>

<?php $this->beginBlock('subHeader') ?>
    <section class="callaction">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <?= WhoisLookupForm::widget(['model' => $model]) ?>
                    <div class="text-center">
                        <?= Html::tag('b', Yii::t('hipanel:domain', 'Available zones') .
                            ': ' .
                            ArraySpoiler::widget(['data' => $availableZones, 'visibleCount' => count($availableZones)])) ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $this->endBlock() ?>


<div class="row">
    <div class="col-sm-12">
        <article>
            <div class="post-content">
                <div id="whois">
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped active" role="progressbar"
                             aria-valuenow="100"
                             aria-valuemin="0"
                             aria-valuemax="100" style="width: 100%">
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </div>
</div>


