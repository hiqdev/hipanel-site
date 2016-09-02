<?php

/**
 * @var \hipanel\modules\server\models\Package[] $xenPackages
 * @var \hipanel\modules\server\models\Package[] $openvzPackages
 */
$this->title = Yii::t('hisite', 'VDS Pricing');
?>

<?= $this->render('_hostingPriceBox', [
    'packages' => $xenPackages,
]); ?>
