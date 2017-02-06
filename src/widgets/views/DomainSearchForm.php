<?php

use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $model \hipanel\modules\domain\models\Domain */

$form = ActiveForm::begin([
    'id' => 'check-domain',
    'method' => 'get',
    'action' => Url::toRoute('/domain/check/check-domain'),
    'options' => [
        'class' => 'material'
    ],
    'fieldConfig' => [
        'template' => "{input}\n{hint}\n{error}",
    ],
]);
print strtr($template, ['{field}' => $form->field($model, 'domain')->textInput([
    'placeholder' => Yii::t('hipanel:domain', 'Domain search'),
    'name' => 'domain',
    'id' => 'domain',
    'autocomplete' => 'off'
])]);
ActiveForm::end();
?>
