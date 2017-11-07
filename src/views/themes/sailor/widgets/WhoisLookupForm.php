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
        'template' => sprintf('<div class="form-group multiple-form-group input-group">
                            {input}
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-theme btn-add">%s</button>
                            </span>
                        </div>{error}', Yii::t('hipanel:domain', 'Lookup')),
    ],
]) ?>
<div class="row">
    <div class="col-sm-12">
        <?= $form->field($model, 'domain')->textInput([
            'placeholder' => Yii::t('hipanel:domain', 'Domain name'),
            'class' => 'form-control',
            'name' => 'domain',
            'id' => 'domain',
            'autocomplete' => 'off',
        ]) ?>
    </div>
</div>
<?php ActiveForm::end() ?>
