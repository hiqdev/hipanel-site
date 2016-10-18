<?php
$host = Yii::$app->request->hostName;
$this->title = 'A-record';
?>

<p>You need to install our NS-servers to configure the A-record in the <?= $options['host'] ?> panel.</p>
<p><a href="#01-ns#01-installing">Installing <?= $options['host'] ?> NS-servers</a>.</p>
<p>After selecting the A-record type, specify the correct IP address in the line that is shown on the
    screenshot. </p>
<p><img src="<?= $options['imgDir'] ?>/help/dns/setup/en/a_1.png"></p>
<p>You can also specify IP addresses for Subdomain names if necessary. To do that, the Subdomain name should be
    indicated
    as prefix in the specific field. If you need to specify only one IP address for all Subdomain names, write "*"
    symbol in
    the "Subdomain name" field.
</p>
