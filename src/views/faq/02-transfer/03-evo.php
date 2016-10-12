<?php

$host = Yii::$app->request->hostName;

$this->title = Yii::t('hipanel:site:faq', 'Transferring domain to {host}', compact('host'));
?>
