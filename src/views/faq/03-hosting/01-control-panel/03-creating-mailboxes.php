<?php
$this->title = 'Creating mailboxes';
?>

<p>Select "Mail" section in the "Hosting panel" menu of your control panel. To create new mailbox, click on "Create
    mail" button.
</p>
<img style="display:block; margin:0 0 10px 0;" src="/www/img/faq/panelAHnames/qs7_en.png" border="0">

<p>Select the necessary values from "Server" and "Account" dropdown lists. <br>
    Specify the mailbox name in the "Address" field. <br>
    Set the password for the mailbox in the "Password" field. <br>
    If you need redirecting, specify emails in the "Forward to" field. Select the most suitable "action for spam" field.
    <br>
    Fill in the "Auto reply text" if necessary. <br>
    Click "Save" after filling all the necessary fields.
</p>
<img style="display:block; margin:0 0 10px 0;" src="/www/img/faq/panelAHnames/qs77_en.png" border="0">

<p>Please note that you can create mailboxes for connected domains only.
    Use the following pop and smtp parameters to connect mailboxes to mail clients:
    <br><b>mail.connecting.name</b> — server for receiving mail
    <br><b>smtp1.connecting.name</b> — sending mail</p>
<p><b>
        In order to avoid unwanted mass newsletters, the mail sending is allowed only via ahnames mail server by
        default. Access to the port 25 to the other hosts is denied. If this port is required for your services, please,
        create a ticket with the corresponding request and a description of purpose of usage. After that the port will
        be open and this restriction will be removed for your VPS.
    </b></p>

