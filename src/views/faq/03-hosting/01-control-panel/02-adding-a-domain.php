<?php
$this->title = 'Adding a domain';
?>

<p>Select "Domains" field in the "Hosting Panel" list. Select the necessary parameters from the lists in the window that
    appears and click on
    "Add domain" button in the action bar.
    <img style="display:block; margin:0 0 10px 0;" src="/www/img/faq/panelAHnames/qs5_en.png" border="0">
    "Server" and "Account" fields will be filled based on the values you have selected in the previous window.
    Write the full name of your domain in "Domain" field. If you need a "www" domain support, check the ""lncluding www"
    field. "Path" field is filled automatically
    based on domain name. You can specify it yourself if needed. Select domain IP in the "IP" field.</p>

<p>If your resources contain a lot of statistics and you want to reduce the load on server, you can use the nginx —
    apache pack to proxy some part of requests.
    To do so, check the "Proxying" box and specify IP addresses that will be used for this action. (at least 2 IP
    addresses). Select domain backup parameters
    from the dropdown list. After all the necessary parameters are selected, click on "Save" in the action box.
</p>
<img style="display:block; margin:0 0 10px 0;" src="/www/img/faq/panelAHnames/qs6_en.png" border="0">

<p>After successfully adding all domains, they will appear in the list below the action bar.
    All new domains automatically have our NS records. For a domain to start working on new VPS, you need to set our NS
    records
    (ns1.webns.org, ns2.webns.org, ns3.webns.org) in the control panel of your current registrar.</p>

