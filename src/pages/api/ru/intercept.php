<?php

$this->title = Yii::t('hipanel.site.api', 'API for intercepting dropping domains');

?>
<div class="various">

    <div class="row">
        <div class="col-sm-12">

            <div class="alert alert-info">
                <b>Внимание!</b>
                <p>в данный момент мы перехватываем домены только в зонах .com и .net. Остальные зоны будут добавлены в
                    скором времени и мы сообщим вам об этом на e-mail.</p>
            </div>

            <h4>1. Общие положения</h4>

            <ul class="long-dash-list">
                <li>данный API работает по тем же принципам что и наш основной API, если вы ещё не знакомы с ним,
                    пожалуйста <a href="/ru/resellers?tab=2">читайте здесь</a>;
                </li>
                <li>не пытайтесь перехватить домены с помощью основного API, там введены жёсткие ограничение на частоту
                    запросов, за нарушения будем банить;
                </li>
                <li>перехват доступен всем нашим пользователям и работает по принципу аукциона, чья ставка выше тому и
                    достанется домен в случае перехвата;
                </li>
                <li>при посылке запроса на перехват домена проверяется достаточно ли средств на счету и блокируется
                    стоимость регистрации в соответствующей зоне и сумма ставки, если домен не перехвачен - деньги
                    возвращаются, с некоторой задержкой, но обязательно;
                </li>
                <li>мы сами посылаем массу запросов на перехват домена со всей доступной нам частотой регистратору зоны,
                    вам нужно лишь сделать нам заявку на желаемый домен с указанием вашей ставки;
                </li>
                <li>доступная нам частота запросов на перехват используется пропорционально сумме ставки;</li>
                <li>например: домен1 ставка 1 доллар, домен2 ставка 100 долларов: запросы на домен2 будут посылаться в
                    100 раз чаще чем на домен1;
                </li>
                <li>удачного перехвата!</li>
            </ul>

            <h4>2. Подробные примеры</h4>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th width="15%">Команда</th>
                    <th width="25%">Описание</th>
                    <th width="30%">Аргументы</th>
                    <th width="30%">Возвращаемые значения</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th>domainIntercept</th>
                    <td>Request domain intercept</td>
                    <td>
                        <ul>
                            <li><b>domain</b> — domain, *</li>
                            <li><b>bid</b> — money, *; сумма ставки, больше нуля, в долларах</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li><b>domain</b> — domain</li>
                            <li><b>bid</b> — актуальная (максимальная) ставка на данный момент</li>
                            <li><b>got</b> — '1' если домен за вами, иначе null</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th>domainsIntercept</th>
                    <td>Request multiple domains intercept</td>
                    <td>
                        <ul>
                            <li><b>массив</b> — domainIntercept</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li><b>массив</b> — domainIntercept</li>
                        </ul>
                    </td>
                </tr>
                </tbody>
            </table>

            <b>Пример: domainIntercept</b><br>
            <pre>/domainIntercept?auth_login=demo&amp;auth_password=demo&amp;domain=test.com&amp;bid=1</pre>

            <br><b>Пример ответа 1:</b><br>
            <pre>{"id":1414054,"domain":"test.com","bid":1,"got":"1"}</pre>
            <ul>
                <li><b>bid=1</b> - текущая максимальная ставка - 1 доллар;</li>
                <li><b>got='1'</b> - на данный момент домен за вами - ваша ставка пока максимальная;</li>
            </ul>

            <br><b>Пример ответа 2:</b><br>
            <pre>{"id":1414054,"domain":"test.com","bid":2,"got":""}</pre>
            <ul>
                <li><b>bid=2</b> - текущая максимальная ставка - 2 доллара;</li>
                <li><b>got=null</b> - домен за кем-то другим - если нужно - повышайте ставку, как минимум до
                    bid+0.01=2.01;
                </li>
            </ul>

            <br><b>Пример ответа 3:</b><br>
            <pre>{"id":1414054,"domain":"test.com","bid":1,"got":""}</pre>
            <ul>
                <li><b>bid=2</b> - текущая максимальная ставка - 1 доллар, такая же как ваша, но ваша ставка сделана
                    позже, поэтому домен не за вами;
                </li>
                <li><b>got=null</b> - домен за кем-то другим - если нужно - повышайте ставку, как минимум до
                    bid+0.01=1.01;
                </li>
            </ul>

            <br><b>Пример: domainsIntercept</b><br>
            <pre>/domainsIntercept?auth_login=demo&amp;auth_password=demo&amp;0[domain]=test1.com&amp;0[bid]=1&amp;1[domain]=test2.com&amp;1[bid]=1</pre>


        </div>
    </div>

</div>

