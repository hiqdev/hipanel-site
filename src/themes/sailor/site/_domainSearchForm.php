<?php
use hipanel\site\widgets\DomainSearchForm;

?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="text-center">
                <h2><?= $this->title ?></h2>
            </div>
            <?= DomainSearchForm::widget([
                'template' => sprintf('<div class="form-group multiple-form-group input-group">
                            {input}
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-theme btn-add">%s</button>
                            </span>
                        </div>{error}', Yii::t('hipanel:domain', 'Domain search')),
            ]) ?>
        </div>
    </div>
</div>
