<?php

use hisite\modules\news\widgets\NewsRotatorWidget;
use hipanel\site\widgets\DomainAvailability;
use hipanel\site\widgets\NewPlans;
use hipanel\site\widgets\PricingBox;
use hipanel\site\widgets\OurApp;

?>

<?= DomainAvailability::widget() ?>
<?= NewPlans::widget() ?>
<?= PricingBox::widget() ?>
<?= OurApp::widget() ?>
<?= NewsRotatorWidget::widget() ?>
