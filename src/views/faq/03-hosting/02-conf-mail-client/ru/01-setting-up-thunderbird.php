<?php
$this->title = 'Настройка почтового клиента Thunderbird';
?>

<p>Для настройки работы почтового клиента Thunderbird с почтой вашего сервера, запустите Thunderbird, нажмите "Создать
    учетную запись: Электронная почта"</p>
<img style="display:block; margin:0 0 10px 0;" border="0" src="<?= $options['imgDir'] ?>/faq/hosting/ru/thunderbird1.png">
<p>Далее необходимо добавить имя и параметры подключения к почтовому ящику</p>
<img style="display:block; margin:0 0 10px 0;" border="0" src="<?= $options['imgDir'] ?>/faq/hosting/ru/thunderbird2.png">
<p>Поле "Ваше имя" может быть любое. Это имя которое будет отображаться в переписке с Вами.</p>
<img style="display:block; margin:0 0 10px 0;" border="0" src="<?= $options['imgDir'] ?>/faq/hosting/ru/thunderbird3.png">
<p>Далее Thunderbird попытается автоматически определить параметры подключения к почтовому серверу. Вежливо
    отказываемся, выбрав "Настройка вручную".</p>
<img style="display:block; margin:0 0 10px 0;" border="0" src="<?= $options['imgDir'] ?>/faq/hosting/ru/thunderbird4.png">
<p>В окне ручной настройки, указываем параметры подключения к серверу как показано ниже: mail.connecting.name - сервер
    входящей почты; smtp1.connecting.name - сервер исходящей почты. В качестве логина необходимо использовать полное имя
    ящика user@domain.com</p>
<img style="display:block; margin:0 0 10px 0;" border="0" src="<?= $options['imgDir'] ?>/faq/hosting/ru/thunderbird5.png">
<p>На этом настройка завершена, и ящик user@domain.com готов к использованию в клиенте Thunderbird</p>
