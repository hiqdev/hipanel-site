<?php
$this->title = 'URL forwarding';
?>

<p>You need to install our NS-servers to configure URL forwarding in <?= $options['host'] ?> panel.</p>
<p><a href="#01-installing">Installing <?= $options['host'] ?> servers</a>.</p>
<p>Activate "URL forwarding" option for specific domain In the "Manage DNS" section.
    Select one or several domains and choose the necessary option in the dropdown window. </p>
<p><img src="<?= $options['imgDir'] ?>/help/dns/setup/en/url_redirect_1.png"></p>

<p>Now you can configure forwarding from your domain to any other website. You can also configure forwarding for
    Subdomain names or
    use "*" symbol to indicate any Subdomain name."Forwarding address" allows entering get urls that look like this:
    http://name/.</p>
<p><img src="<?= $options['imgDir'] ?>/help/dns/setup/en/url_redirect_2.png"></p>
<p>The following settings can also be used to forward an URL: 301 — transferred permanently, 302 — transferred
    temporarily.</p>
