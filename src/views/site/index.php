<?php
use hipanel\site\widgets\DomainPriceTable;
use hipanel\site\widgets\DomainSearchForm;
use hisite\modules\news\widgets\NewsRotatorWidget;
use yii\helpers\Html;

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

<div class="domain-prices">
    <div class="row">
        <div class="row">
            <div class="col-sm-12">
                <?= DomainPriceTable::widget() ?>
            </div>
        </div>
    </div>
</div>

<?= NewsRotatorWidget::widget() ?>
