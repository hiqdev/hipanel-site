<?php

use hipanel\site\widgets\DomainSearchForm;
use yii\helpers\Html;

?>

<div class="domainavailability">
    <div class="row">
        <div class="col-sm-12 col-md-9 center-block">
            <?= Html::tag('h1', $this->title, ['class' => 'text-center']) ?>
            <div class="domain-form-container">
                <?= DomainSearchForm::widget([
                    'model' => $model,
                    'zones' => $zones,
                    'template' => "<div class=\"row\"><input type=\"hidden\" name=\"direct\" value=\"true\"/><div class=\"col-sm-11\">{input}\n{error}</div><div class=\"col-sm-1\"><button class=\"mtr-btn button-fab\" type=\"submit\"><i class=\"fa fa-search\"></i></button></div></div>",
                ]) ?>
            </div>
        </div>
    </div>
</div>
