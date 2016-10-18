<?php
$this->title = 'Что такое Whois Protect';
?>

<p>Процедура регистрации домена проста и понятна, и обычно не вызывает никаких проблем у пользователя.
    Но при указании регистрационных данных, то есть персональных данных владельца домена, возникает риск
    стать потенциальной мишенью для спамеров — сбор личной информации, прямые звонки, включение личного
    адреса электронной почты в базу для email рассылок.
</p>
<p>С целью защитить персональные данные мы предоставляем услугу Whois Protect для всех наших доменных зон.
    Эта функция скрывает ваши личные данные от всех желающих их просмотреть и на запрос Whois выдает информацию о
    сервисе Whois Protect.
</p>
<div class="row">
    <div class="col-xs-6">
        <div class="well well-sm">
            <h5>Без WhoisProtectService</h5>
            <p>John Black<br>
                5285 Decarie Boulevard #100<br>
                Montreal, qc H3W3C2<br>
                Canada<br>
                +1.5144959001, Fax:+1.5144953105<br>
                johnblack@gmail.com</p>

        </div>
    </div>
    <div class="col-xs-6">
        <div class="well well-sm">
            <h5>С использованием WhoisProtectService</h5>
            <p>WhoisProtectService.net PROTECTSERVICE, LTD.<br>
                27 Old Gloucester Street<br>
                London<br>
                GB<br>
                WC1N 3AX<br>
                +44.02074195061<br>
                ahnames.me@whoisprotectservice.net
            </p>
        </div>
    </div>
</div>
<p>Благодаря функции email forwarding с вами смогут связаться несмотря на то, что ваш личный email остается
    скрытым — письма будут переадресовываться с почты Whois Protect domen@whoisprotectservice.net на адрес, который вы
    указали при регистрации домена.
</p>
<p>Услуга Whois Protect включается автоматически при выполнении регистрации или трансфера домена.
    Отключить сервис очень просто — достаточно снять галочку «включить Whois Protect».
</p>
<img src="<?= $options['imgDir'] ?>/whois_faq_ru.png">
