<?php
$this->title = 'Setting up Thunderbird';
?>

<p>To configure the Thunderbird mail client for your mail server, start Thunderbird and click on "Create an account:
    E-mail"</p>
<img style="display:block; margin:0 0 10px 0;" border="0" src="<?= $options['imgDir'] ?>/faq/hosting/en/thunderbird1.png">
<p>Then enter the name and connection parameters for the mailbox.</p>
<img style="display:block; margin:0 0 10px 0;" border="0" src="<?= $options['imgDir'] ?>/faq/hosting/en/thunderbird2.png">
<p>There are no restrictions as to "Your Name" field. This name will be displayed in the correspondence with you.</p>
<img style="display:block; margin:0 0 10px 0;" border="0" src="<?= $options['imgDir'] ?>/faq/hosting/en/thunderbird3.png">
<p>After this step Thunderbird will try to automatically set up the connection parameters for the mailbox. Kindly
    decline by clicking <b>Manual Config</b>.</p>
<img style="display:block; margin:0 0 10px 0;" border="0" src="<?= $options['imgDir'] ?>/faq/hosting/en/thunderbird4.png">
<p>In the <b>Manual Config</b> window set the connection parameters to the server as shown below: mail.connecting.name -
    incoming mail server; smtp1.connecting.name - outgoing mail server. The full user@domain.com box name must be used
    as a username.</p>
<img style="display:block; margin:0 0 10px 0;" border="0" src="<?= $options['imgDir'] ?>/faq/hosting/en/thunderbird5.png">
<p>This completes the setting and user@domain.com box is ready for usage in the Thunderbird client.</p>
