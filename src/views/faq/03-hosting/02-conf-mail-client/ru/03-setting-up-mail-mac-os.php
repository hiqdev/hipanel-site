<?php
$this->title = 'Настройка почтового клиента Mail (Mac OS)';
?>

<p>Для настройки работы почтового клиента Mail с почтой вашего сервера, запустите Mail и в окне выбора настроек почты
    выбираем пункт "Other Mail Account"</p>
<img style="display:block; margin:0 0 10px 0;" border="0" src="<?= $options['imgDir'] ?>/faq/hosting/ru/macos1.png">
<p>Далее вводим свое имя, имя Вашего почтового ящика и пароль</p>
<img style="display:block; margin:0 0 10px 0;" border="0" src="<?= $options['imgDir'] ?>/faq/hosting/ru/macos2.png">
<p>В окне ручной настройки, указываем параметры подключения к серверу как показано ниже: mail.connecting.name - сервер
    входящей почты; smtp1.connecting.name - сервер исходящей почты. "Имя пользователя" - необходимо использовать полное
    имя ящика user@domain.com</p>
<img style="display:block; margin:0 0 10px 0;" border="0" src="<?= $options['imgDir'] ?>/faq/hosting/ru/macos3.png">
<p>В конце выбираем приложение "Mail" , которое должно использовать данный аккаунт</p>
<img style="display:block; margin:0 0 10px 0;" border="0" src="<?= $options['imgDir'] ?>/faq/hosting/ru/macos4.png">
<p>На этом настройка завершена, и ящик user@domain.com готов к использованию в клиенте Mail на Вашем MacBook</p>
