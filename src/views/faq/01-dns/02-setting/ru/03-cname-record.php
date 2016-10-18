<?php
$host = Yii::$app->request->hostName;
$this->title = 'CNAME-record';
?>

<p>You need to install our servers to configure the CNAME-record in the ahnames.com panel.</p>
<p><a href="#01-ns#01-installing">Installing <?= $opt['host'] ?> NS-servers</a>.</p>
<p>When CNAME-record is selected, specify the domain that will be used to refer to main domain name or the specified
    Subdomain name.</p>
<p><img src="/www/img/help/dns/setup/en/cname_1.png"></p>
