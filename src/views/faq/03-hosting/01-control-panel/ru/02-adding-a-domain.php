<?php
$this->title = 'Добавление домена';
?>

<p>Выберите пункт «Домены» в списке «Хостинг панель» панели управления и в открывшемся окне нажмите кнопку «Добавить
    домен» в панели действий.</p>
<img style="display:inline-block; margin:0 0 10px 0; display:block" src="<?= $options['imgDir'] ?>/faq/panelAHnames/qs5_ru.png"
     border="0">

<p>В появившемся окне выберите необходимые значения в полях «Сервер» и «Аккаунт».<br>
    В поле «Домен» введите полное название Вашего домена. <br>
    Если требуется поддержка домена через «www», отметьте чекбокс «С www». <br>
    Поле «Путь» заполняется автоматически, исходя из имени домена, однако, в случае необходимости, укажите путь
    самостоятельно. <br>
    В поле «IP» выберите IP, к которому будет привязан домен. <br>
    Если Ваши ресурсы содержат много статики и есть желание снизить нагрузку на сервер, можно воспользоваться связкой
    nginx —
    apache для проксирования части запросов. Для этого отметьте чекбокс «Проксирование» и укажите IP, которые будут
    использоваться для этого
    (необходимо минимум 2 IP). <br>
    В нижней строке в выпадающем списке выберите параметры бекапа домена.<br>
    После выбора всех необходимых параметров нажмите кнопку «Сохранить» в панели действий.
</p>
<img style="display:inline-block; margin:0 0 10px 0; display:block" src="<?= $options['imgDir'] ?>/faq/panelAHnames/qs6_ru.png"
     border="0">

<p>После успешного добавления доменов все они появятся в списке под панелью действий.
    У новых доменов автоматически прописываются наши NS записи.
    Чтобы домен начал работать на новом VDS, необходимо прописать наши NS (ns1.webns.org, ns2.webns.org, ns3.webns.org)
    в панели инструментов текущего регистратора домена.
</p>
