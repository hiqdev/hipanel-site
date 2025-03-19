<p>The table shows an extract from a directory that contains a full list of available commands.</p>

<table class="table table-bordered server-products-table">
    <thead>
    <tr>
        <th>Command</th>
        <th>Description</th>
        <th>Arguments</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th>domainsCheck</th>
        <td>Domains availability check</td>
        <td class="left_column">
            <ul>
                <li><b>domains</b> — domains, *</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>domainRegister</th>
        <td>Domain registration</td>
        <td class="left_column">
            <ul>
                <li><b>domain</b> — domain, *</li>
                <li><b>period</b> — period, по умолчанию: 1 год</li>
                <li><b>sometimes the operation can take up to 10 minutes due to circumstances beyond our control.
                        therefore set 10 minutes timeout for the api response.</b></li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>domainsRegister</th>
        <td>Domains registration</td>
        <td class="left_column">
            <ul>
                <li><b>array of</b> — domainRegister</li>
                <li><b>sometimes the operation can take up to 10 minutes due to circumstances beyond our control.
                        therefore set 10 minutes timeout for the api response.</b></li>
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
                <li><b>array of</b> — domainGetInfo</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>domainSetNote</th>
        <td>Set client note for the domain</td>
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
                <li><b>array of</b> — domainSetNote</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>domainsSetDNS</th>
        <td>Set DNS settings for given domain</td>
        <td class="left_column">
            <ul>
                <li><b>array of</b> — domainSetDNS</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>serverBuy</th>
        <td>Buy server</td>
        <td class="left_column">
            <ul>
                <li><b>tariff</b> - label,*</li>
                <li><b>cluster_id</b> - id,* (one of: 1 - Netherlands, Amsterdam, 2 - USA, Ashburn)</li>
                <li><b>osimage</b> - eid,* (available values can be obtained with command <b>osimagesSearch</b>)</li>
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
<p>The only argument of "domains" command is a comma delimited list of domains. It is needed to check domain
    availability for registration.<br>* - an “asterisk” means that an argument is required. It's omission provokes an
    error.</p>

<pre><?= Yii::$app->params['api.prod.url'] ?>/domainsCheck?auth_login=demo&amp;auth_password=demo&amp;domains=test.com,adfwer234asdf.net</pre>

<h4>2.2. domainRegister</h4>
<p>Be sure to type only a domain name. Other parameters provide defaults.</p>
<pre><?= Yii::$app->params['api.prod.url'] ?>/domainRegister?auth_login=demo&amp;auth_password=demo&amp;domain=test42345.com</pre>

<h4>2.3. domainsRegister</h4>
<p>An example of bulk-operation conducted upon several objects at the same time. A word “array” is used in the
    description of arguments. It means that the array has to be transferred and its every element fits as an argument
    for a stated operation. In our case it is domainRegister.</p>
<p><b>sometimes the operation can take up to 10 minutes due to circumstances beyond our control. therefore set 10
        minutes timeout for the api response.</b></p>

<pre><?= Yii::$app->params['api.prod.url'] ?>/domainsRegister?auth_login=demo&amp;auth_password=demo&amp;0[domain]=test42345.com&amp;1[domain]=test123123.net</pre>

<h4>2.4. domainGetInfo</h4>
<p>It is very easy – here you need to transfer a name or ID of a domain. It sends back domain array of data.</p>
<pre><?= Yii::$app->params['api.prod.url'] ?>/domainGetInfo?auth_login=demo&amp;auth_password=demo&amp;domain=test42345.com</pre>

<h4>2.5. domainsGetInfo</h4>
<p>Bulk-operation - upon several objects at the same time.</p>
<pre><?= Yii::$app->params['api.prod.url'] ?>/domainsGetInfo?auth_login=demo&amp;auth_password=demo&amp;0[domain]=test42345.com&amp;1[domain]=test.com</pre>

<h4>2.6. domainSetNote</h4>
<p>Blank or not indicated “note” – deletes any note.</p>
<pre><?= Yii::$app->params['api.prod.url'] ?>/domainSetNote?auth_login=demo&amp;auth_password=demo&amp;domain=test.com&amp;note=abc</pre>

<h4>2.7. domainsSetNote</h4>
<pre><?= Yii::$app->params['api.prod.url'] ?>/domainsSetNote?auth_login=demo&amp;auth_password=demo&amp;0[domain]=test.com&amp;0[note]=abc&amp;1[domain]=test3.com&amp;1[note]=def</pre>

<h4>2.8. domainsSetDNS</h4>
<pre><?= Yii::$app->params['api.prod.url'] ?>/domainsSetDNS?auth_login=demo&amp;auth_password=demo&amp;5504202[1][type]=a&amp;5504202[1][value]=123.123.123.123&amp;5504202[1][no]=1&amp;5504202[1][ttl]=7200&amp;5504202[1][status]=new</pre>

<h4>2.9. serverBuy</h4>
<pre><?= Yii::$app->params['api.prod.url'] ?>/serverBuy?auth_login=demo&amp;auth_password=demo&amp;tariff=XENSSD%20VDS%204%20100+&amp;os=centos&amp;panel=isp&amp;cluster_id=1&amp;social=test&amp;purpose=test&amp;callback_url=http:\/\/my.domain.com\/page\/for\/callback</pre>


