<?php

$this->title = Yii::t('hipanel.site.api', 'API for intercepting dropping domains');

?>
<div class="various">

    <div class="row">
        <div class="col-sm-12">

            <div class="alert alert-info">
                <b>Attention!</b>
                <p>At the moment we intercept only .com and .net. Other zones in the near future. We will notify you
                    by e-mail.</p>
            </div>

            <h4>1. General information</h4>

            <ul class="long-dash-list">
                <li>this API works on the same principles as our main API. Read about our main API you can <a
                            href="/pages/api">here</a>;
                </li>
                <li>do not try to intercept domains using the main API, strict limitations also have been enacted
                    for frequent requests. For violations user will be banned;
                </li>
                <li>interception is available for all our users and works on the auction principle: whose bid is
                    higher than keeps the domain in case of interception;
                </li>
                <li>when the request to intercept the domain is sending, it checking if there enough funds at the
                    account. The required cost for registration in the proper zone and bid amount reserved. If the
                    domain was not intercepted, funds will be returned with some delay, but surely;
                </li>
                <li>we send a lot of requests to registrar of zone with all available frequency to intercept domain.
                    You just have to make a request for desired domain name with your bid;
                </li>
                <li>available frequency of requests for interception is using proportional to the amount of the
                    bet;
                </li>
                <li>for example: domain1 - bet is $ 1, domain2 - bet is $ 100. Requests for domain2 will be sent 100
                    times more than domain1;
                </li>
                <li>Good luck!</li>
            </ul>

            <h4>2. Detailed examples</h4>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th width="15%">Command</th>
                    <th width="25%">Description</th>
                    <th width="30%">Arguments</th>
                    <th width="30%">Return values</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th>domainIntercept</th>
                    <td>Request domain intercept</td>
                    <td>
                        <ul>
                            <li><b>domain</b> — domain, *</li>
                            <li><b>bid</b> — money, *; amount greater than zero, in dollars</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li><b>domain</b> — domain</li>
                            <li><b>bid</b> — current (maximum) rate at the moment</li>
                            <li><b>got</b> — '1' if domain is yours, in other case 'null'</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th>domainsIntercept</th>
                    <td>Request multiple domains intercept</td>
                    <td>
                        <ul>
                            <li><b>array of</b> — domainIntercept</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li><b>array of</b> — domainIntercept</li>
                        </ul>
                    </td>
                </tr>
                </tbody>
            </table>

            <b>Example: domainIntercept</b><br>
            <pre>/domainIntercept?auth_login=demo&amp;auth_password=demo&amp;domain=test.com&amp;bid=1</pre>

            <br><b>Example of answer 1:</b><br>
            <pre>{"id":1414054,"domain":"test.com","bid":1,"got":"1"}</pre>
            <ul>
                <li><b>bid=1</b> — current (maximum) rate at the moment — $1;</li>
                <li><b>got='1'</b> — the domain is yours at this moment — your bid is maximum for the present;</li>
            </ul>

            <br><b>Example of answer 2:</b><br>
            <pre>{"id":1414054,"domain":"test.com","bid":2,"got":""}</pre>
            <ul>
                <li><b>bid=2</b> — current (maximum) rate at the moment — $2;</li>
                <li><b>got=null</b> — the domain is in someone else. Please, increase your bid minimum to:
                    bid+0.01=2.01;
                </li>
            </ul>

            <br><b>Example of answer 3:</b><br>
            <pre>{"id":1414054,"domain":"test.com","bid":1,"got":""}</pre>
            <ul>
                <li><b>bid=2</b> — the maximum current rate is $1 as same as your, but the domain is not yours as
                    you bid later;
                </li>
                <li><b>got=null</b> — the domain is in someone else. Please, increase your bid minimum to:
                    bid+0.01=1.01;
                </li>
            </ul>

            <br><b>Example: domainsIntercept</b><br>
            <pre>/domainsIntercept?auth_login=demo&amp;auth_password=demo&amp;0[domain]=test1.com&amp;0[bid]=1&amp;1[domain]=test2.com&amp;1[bid]=1</pre>

        </div>
    </div>

</div>

