<?php
$this->title = 'MX-record';
?>

<p>You need to install our NS-servers to configure the MX-record in <?= $options['host'] ?>.</p>
<p><a href="#01-installing">Installing <?= $options['host'] ?> NS-servers</a>.</p>
<p>After the A-type record is selected, specify the subdomain name, that the record will use and specify the correct
    IP-address. Next, when selecting the "MX" type record, specify MX priority for the created domain. As a rule, the
    following priority values are specified for postal server: 10, 20, 30, 40, 50.
    The closer the value is to 0, the higher its priority is. Mail is processed by a server that has higher priority
    value.
    If this server is unavailable, mail will be processed by a server with lower priority.
</p>
<p><img src="<?= $options['imgDir'] ?>/help/dns/setup/en/mx_1.png"></p>
