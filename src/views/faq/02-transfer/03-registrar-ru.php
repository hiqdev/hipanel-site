<?php

use \yii\helpers\Html;

$this->title = 'Transferring RU domain to other registrar';
?>

<p>if you want to transfer .ru domains to other registrars, you will need to get the auth code,
    You have to check out through which our partner is registered the domain using the link <?= Html::a('Whois', ['/domain/whois']) ?></p>
<p><img src="<?= $options['imgDir'] ?>/help/transfer_out/en/3.jpg"></p>
<p>If it is:</p>
<ol>
    <li>
        <p><b>by registrar: ARDIS-RU</b>, to obtain the auth code you must verify domain`s contact  according to the <?= Html::a('instructions', ['/site/faq#tab-04-verification']) ?>. Next, you need to create a ticket with request for a  auth code.</p>
    </li>
    <li>
        <p><b>by registrar: R01-RU</b>, to obtain the transfer code You need to restore an access on the website of the Registrar r01.ru by entering the domain name <?= Html::a('here', ['https://partner.r01.ru/forgot.khtml']) ?> to upload supporting documents in the section “administrators” to write a request for verification on <?=Html::mailto('info@r01.ru') ?> and after the success checking to  generate the auth code  in the domain settings.</p>
    </li>
</ol>
