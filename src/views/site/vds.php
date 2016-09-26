<?php

/**
 * @var \hipanel\modules\server\models\Package[] $xenPackages
 * @var \hipanel\modules\server\models\Package[] $openvzPackages
 */
$this->title = Yii::t('hisite', 'VDS Pricing');
$this->registerCss(".products-table { display: table; }");
?>

<?= $this->render('_hostingPriceBox', [
    'packages' => $xenPackages,
]); ?>

<?= $this->render('_hostingPriceBox', [
    'packages' => $openvzPackages,
]); ?>
