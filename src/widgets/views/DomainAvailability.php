<?php
use hipanel\site\widgets\DomainSearchForm;

?>
<!-- DOMAIN SEARCH -->
<div class="domainavailability front-page">
    <div class="row">
        <div class="col-sm-12 col-md-9 center-block">
            <h1 class="text-center"><?= Yii::t('hisite', 'Domains search and registration') ?></h1>
            <div class="domain-form-container">
                <?= DomainSearchForm::widget() ?>
            </div>
        </div>
    </div>
</div>
<!-- END OF DOMAIN SEARCH -->
