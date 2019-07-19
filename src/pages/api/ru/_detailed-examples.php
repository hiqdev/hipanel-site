<p>В данной таблице приведена выдержка из справочника - полного списка всех доступных команд. На примере этих команд
    будет понятно как пользоваться справочником.</p>

<table class="table table-bordered server-products-table">
    <thead>
    <tr>
        <th>Команда</th>
        <th>Описание</th>
        <th>Аргументы</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th>domainsCheck</th>
        <td>Проверка доступности доменов</td>
        <td class="left_column">
            <ul>
                <li><b>domains</b> — domains, *</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>domainRegister</th>
        <td>Регистрация доменов</td>
        <td class="left_column">
            <ul>
                <li><b>domain</b> — domain, *</li>
                <li><b>period</b> — period, по умолчанию: 1 год</li>
                <li><b>по независящим от нас обстоятельствам иногда выполнение операции может занимать до 10 минут.
                        поэтому ставьте таймаут ожидания ответа от апи - 10 минут.</b></li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>domainsRegister</th>
        <td>Domains registration</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> — domainRegister</li>
                <li><b>по независящим от нас обстоятельствам иногда выполнение операции может занимать до 10 минут.
                        поэтому ставьте таймаут ожидания ответа от апи - 10 минут.</b></li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>domainGetInfo</th>
        <td>Get information of the domain</td>
        <td class="left_column">
            <ul>
                <li><b>domain</b> — domain</li>
                <li><b>id</b> — id</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>domainsGetInfo</th>
        <td>Get information of given domains</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> — domainGetInfo</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>domainSetNote</th>
        <td>Установка клиентского примечания для домена</td>
        <td class="left_column">
            <ul>
                <li><b>domain</b> — domain</li>
                <li><b>note</b> — label</li>
                <li><b>id</b> — id</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>domainsSetNote</th>
        <td>Set client note for given domains</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> — domainSetNote</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>domainsSetDNS</th>
        <td>Set DNS settings for given domain</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> — domainSetDNS</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>serverBuy</th>
        <td>Buy server</td>
        <td class="left_column">
            <ul>
                <li><b>tariff</b> - label,*</li>
                <li><b>cluster_id</b> - id,* (один из: 1 - Нидерланды, Амстердам, 2 - США, Эшбурн)</li>
                <li><b>osimage</b> - eid,* (доступные значения могут быть получены с помощью комманды
                    <b>osimagesSearch</b>)
                </li>
                <li><b>panel</b> - ref</li>
                <li><b>social</b> - label</li>
                <li><b>purpose</b> - label</li>
                <li><b>callback_url</b> - url</li>
            </ul>
        </td>
    </tr>
    </tbody>
</table>

<h4>2.1. domainsCheck</h4>
<p>Единственный аргумент этой команды - "domains" - список доменнов через запятую для проверки их доступности для
    регистрации.<br>* - "звёздочка", значит что аргумент обязательный, если он не передан будет ошибка.</p>
<pre><?= Yii::$app->params['api.demo.url'] ?>/domainsCheck?auth_login=demo&amp;auth_password=demo&amp;domains=test.com,adfwer234asdf.net</pre>

<h4>2.2. domainRegister</h4>
<p>Обязательно указывать только имя домена, для остальных параметров предусмотрены дефолты.</p>
<pre><?= Yii::$app->params['api.demo.url'] ?>/domainRegister?auth_login=demo&amp;auth_password=demo&amp;domain=test42345.com</pre>

<h4>2.3. domainsRegister</h4>
<p>Пример bulk-операции - одновременно над несколькими объектами. В описании аргументов используется слово "массив" -
    обозначающее что должен передаваться массив каждый элемент которого подходит в качестве аргумента для указанной
    операции, в данном случае domainRegister.</p>
<p><b>по независящим от нас обстоятельствам иногда выполнение операции может занимать до 10 минут. поэтому ставьте
        таймаут ожидания ответа от апи - 10 минут.</b></p>
<pre><?= Yii::$app->params['api.demo.url'] ?>/domainsRegister?auth_login=demo&amp;auth_password=demo&amp;0[domain]=test42345.com&amp;1[domain]=test123123.net</pre>

<h4>2.4. domainGetInfo</h4>
<p>Всё просто - надо передать имя или ID домена. Возвращает массив данных о домене.</p>
<pre><?= Yii::$app->params['api.demo.url'] ?>/domainGetInfo?auth_login=demo&amp;auth_password=demo&amp;domain=test42345.com</pre>

<h4>2.5. domainsGetInfo</h4>
<p>Bulk-операция - одновременно над несколькими объектами.</p>
<pre><?= Yii::$app->params['api.demo.url'] ?>/domainsGetInfo?auth_login=demo&amp;auth_password=demo&amp;0[domain]=test42345.com&amp;1[domain]=test.com</pre>

<h4>2.6. domainSetNote</h4>
<p>Пустой или не преданный "note" - удаляет примечание.</p>
<pre><?= Yii::$app->params['api.demo.url'] ?>/domainSetNote?auth_login=demo&amp;auth_password=demo&amp;domain=test.com&amp;note=abc</pre>

<h4>2.7. domainsSetNote</h4>
<pre><?= Yii::$app->params['api.demo.url'] ?>/domainsSetNote?auth_login=demo&amp;auth_password=demo&amp;0[domain]=test.com&amp;0[note]=abc&amp;1[domain]=test3.com&amp;1[note]=def</pre>

<h4>2.8. domainsSetDNS</h4>
<pre><?= Yii::$app->params['api.demo.url'] ?>/domainsSetDNS?auth_login=demo&amp;auth_password=demo&amp;5504202[1][type]=a&amp;5504202[1][value]=123.123.123.123&amp;5504202[1][no]=1&amp;5504202[1][ttl]=7200&amp;5504202[1][status]=new</pre>

<h4>2.9. serverBuy</h4>
<pre><?= Yii::$app->params['api.demo.url'] ?>/serverBuy?auth_login=demo&amp;auth_password=demo&amp;tariff=XENSSD%20VDS%204%20100+&amp;os=centos&amp;panel=isp&amp;cluster_id=1&amp;social=test&amp;purpose=test&amp;callback_url=http:\/\/my.domain.com\/page\/for\/callback</pre>


