<?php

use hiqdev\thememanager\widgets\Faq;

$this->title = Yii::t('hipanel:site:faq', 'FAQ');
$this->blocks['subTitle'] = Yii::t('hipanel:site:faq', 'Find answers to the common questions asked about our services')
?>

<?= Faq::widget() ?>
