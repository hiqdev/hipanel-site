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
print $form->field($model, 'fqdns', ['template' => $template])->textInput([
    'placeholder' => Yii::t('hipanel:domain', 'Domain search'),
    'name' => 'fqdns',
    'id' => 'domain',
    'value' => $model->fqdnsInline,
    'autocomplete' => 'off',
]);
ActiveForm::end();
?>
