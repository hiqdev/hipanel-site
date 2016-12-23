<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

/** @var \hipanel\modules\domain\models\Whois $model */

?>


<?php $form = ActiveForm::begin([
    'id' => 'whois-lookup',
    'action' => Url::toRoute('whois/index'),
    'method' => 'get',
    'options' => [
        'data-pjax' => false,
        'class' => 'material',
    ],
    'fieldConfig' => [
        'template' => "{input}\n{hint}\n{error}",
    ],
]) ?>
<div class="row">
    <div class="col-sm-11">
        <?= $form->field($model, 'domain')->textInput([
            'placeholder' => Yii::t('hipanel:domain', 'Domain name'),
            'class' => 'form-control',
            'name' => 'domain',
            'id' => 'domain',
            'autocomplete' => 'off',
        ]) ?>
    </div>
    <div class="col-sm-1">
        <button class="mtr-btn button-fab" type="submit"><i class="fa fa-search"></i></button>
    </div>
</div>
<?php ActiveForm::end() ?>
