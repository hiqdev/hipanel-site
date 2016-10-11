<?php

$host = Yii::$app->request->hostName;

$this->title = Yii::t('hipanel/site/faq', '{host} NS-server installation', compact('host'));
?>

To configure a DNS in the <b><?= $host ?></b> panel,
go to "DNS control" section and click on the "change DNS" button by highlighting the domain check box.

The system will offer to install our NS-servers.

You'll need to paste NS-server info into specific lines after clicking on "install our NS" button.
