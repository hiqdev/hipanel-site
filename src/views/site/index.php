<?php

use hisite\modules\news\widgets\NewsRotatorWidget;
use hiqdev\providersite\widgets\DomainAvailabilityWidget;
use hiqdev\providersite\widgets\NewPlansWidget;
use hiqdev\providersite\widgets\PricingboxWidget;
use hiqdev\providersite\widgets\OurAppWidget;

?>

<?= DomainAvailabilityWidget::widget() ?>
<?= NewPlansWidget::widget() ?>
<?= PricingboxWidget::widget() ?>
<?= OurAppWidget::widget() ?>
<?= NewsRotatorWidget::widget() ?>
