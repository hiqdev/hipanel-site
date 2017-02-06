<?php

use hipanel\site\menus\FaqMenu;

$this->title = Yii::t('hipanel:site:faq', 'FAQ');
$this->params['breadcrumbs'][] = $this->title;
$this->blocks['subTitle'] = Yii::t('hipanel:site:faq', 'Find answers to the common questions asked about our services')
?>

<?= FaqMenu::widget() ?>
