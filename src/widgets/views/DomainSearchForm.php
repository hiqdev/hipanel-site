<?php
/**
 * Selling site for HiPanel
 *
 * @link      http://hipanel.com/
 * @package   hipanel-site
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2017, HiQDev (http://hiqdev.com/)
 */

use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $model \hipanel\modules\domain\models\Domain */

$form = ActiveForm::begin([
    'id' => 'check-domain',
    'method' => 'get',
    'action' => Url::toRoute('/domain/check/check-domain'),
    'options' => [
        'class' => 'material',
    ],
    'fieldConfig' => [
        'template' => "{input}\n{hint}\n{error}",
    ],
]);
echo $form->field($model, 'fqdns', ['template' => $template])->textInput([
    'placeholder' => Yii::t('hipanel:domain', 'Domain search'),
    'name' => 'fqdns',
    'id' => 'domain',
    'value' => $model->fqdnsInline,
    'autocomplete' => 'off',
]);
ActiveForm::end();
