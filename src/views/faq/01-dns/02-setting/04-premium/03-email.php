<?php
$this->title = 'E-mail forwarding';
?>

<p>You need to install our servers to configure E-mail forwarding in <?= $opt['host'] ?> panel.
</p><p><a href="#01-ns#01-installing">Installing <?= $opt['host'] ?> NS servers</a></p>
<p>Activate the "Mail forwarding" option for necessary domain in the "Manage DNS" section.</p>
<p>Now you can configure mail forwarding from your domain to any existing email address.
    It is possible to forward mail from a specific user as well as all mail. Use "*" symbol as user’s name to forward
    all mail.</p>
<p><img src="/www/img/help/dns/setup/en/email_redirect_1.png"></p>
<p><img src="/www/img/help/dns/setup/en/email_redirect_2.png"></p>
