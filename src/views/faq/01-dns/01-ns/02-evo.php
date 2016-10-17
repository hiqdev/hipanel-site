<?php

$host = Yii::$app->request->hostName;

$this->title = "{$host} NS-server installation";
?>

<p>To configure a DNS in the <b><?= $host ?></b> panel, go to "DNS control" section and click on the "change DNS" button
    by highlighting
    the domain check box. The system will offer to install our NS-servers. You'll need to paste NS-server info into
    specific lines after clicking on
    "install our NS" button.</p>
<p><img src="/www/img/help/dns/install/en/3.png"></p>
<p>Allow some time for the saved changes to take effect. Information update on all servers may take up to 2 hours.</p>
<p><img src="/www/img/help/dns/install/en/4.png"></p>
