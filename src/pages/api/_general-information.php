<div class="alert alert-info ">
    <b>Attention!</b>
    <p>API is not intended to catch the dropping domains. The restrictions on the number of ENQs are introduced.
        Non-observance will result in a ban.<br> We have <a href="/pages/api/intercept">special interface</a> for
        catching.</p>
    <p>Sometimes the operation can take up to 10 minutes due to circumstances beyond our control. Therefore set 10
        minutes timeout for the API response.</p>
</div>
<ul>
    <li>API is available via HTTPS;</li>
    <li>API run-time version is available and can be found at <b><?= Yii::$app->params['api.prod.url'] ?></b>
        respectively;
    </li>
    <li>Requests are sent over <b><?= Yii::$app->params['api.prod.url'] ?>/apiCommand</b>. Request data are transferred via GET or
        POST variables;
    </li>
    <li>There are variables such as auth_login and auth_password used for authorization;</li>
    <li>The results of the request are returned encoded in JSON;</li>
    <li>In case of an error there will be "_error" element in a returned array. This key will contain the
        description of the error;
    </li>
    <li>Acceptable request results may be:
        <ul>
            <li>scalar <span style="font:monospace">"true"</span></li>
            <li>an array which does not contain "_error" element</li>
            <li>any other result including the blank is an error</li>
        </ul>
    </li>
</ul>
<b>Example:</b><br>
<pre><?= Yii::$app->params['api.prod.url'] ?>/domainsCheck?auth_login=demo&amp;auth_password=demo&amp;domains=test.com,adfwer234asdf.net</pre>
<p>This is a run-time example. You may copy URL, paste it in Web browser and see the errors.</p>
