<table class="table table-bordered server-products-table">
    <thead>
    <tr>
        <th width="20%">Команда</th>
        <th width="30%">Описание</th>
        <th width="50%">Аргументы</th>
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
        <th>domainsSearch</th>
        <td>List/Search domains</td>
        <td class="left_column">
            <ul>
                <li><b>ids</b> — ids</li>
                <li><b>domain</b> — label</li>
                <li><b>domains</b> — labels</li>
                <li><b>note</b> — labels</li>
                <li><b>state</b> — ref</li>
                <li><b>client</b> — labels</li>
                <li><b>seller</b> — labels</li>
                <li><b>orderby</b> — ref</li>
                <li><b>limit</b> — id</li>
                <li><b>total</b> — id</li>
                <li><b>page</b> — id</li>
                <li><b>count</b> — bool</li>
                <li><b>show_dns</b> — bool</li>
                <li><b>show_fw_park</b> — bool</li>
                <li><b>dns</b> — ref</li>
                <li><b>view</b> — ref</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>domainRegister</th>
        <td>Регистрация доменов</td>
        <td class="left_column">
            <ul>
                <li><b>domain</b> — domain, *</li>
                <li><b>period</b> — period — по умолчанию: 1 год</li>
                <li><b>registrant</b> — eid</li>
                <li><b>admin</b> — eid</li>
                <li><b>tech</b> — eid</li>
                <li><b>billing</b> — eid</li>
                <li><b>по независящим от нас обстоятельствам иногда выполнение операции может занимать до 10 минут.
                        поэтому ставьте таймаут ожидания ответа от апи - 10 минут.</b></li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>domainsRegister</th>
        <td>Register domains</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> — domainRegister</li>
                <li><b>по независящим от нас обстоятельствам иногда выполнение операции может занимать до 10 минут.
                        поэтому ставьте таймаут ожидания ответа от апи - 10 минут.</b></li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>domainCheckTransfer</th>
        <td>Проверяет данные для трансфера домена</td>
        <td class="left_column">
            <ul>
                <li><b>domain</b> — domain, *</li>
                <li><b>password</b> — password, *</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>domainsCheckTransfer</th>
        <td>Проверяет данные для трансфера доменов</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> — domainCheckTransfer</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>domainTransfer</th>
        <td>Проверяет данные для трансфера доменов</td>
        <td class="left_column">
            <ul>
                <li><b>domain</b> — domain, *</li>
                <li><b>password</b> — password, *</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>domainsTransfer</th>
        <td>Start domains transfer</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> — domainTransfer</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>domainApprovePreincoming</th>
        <td>Approve domains transfer</td>
        <td class="left_column">
            <ul>
                <li><b>domains</b> — list of domains, comma separeted</li>
                <li><b>confirm_data</b> - array of data from message</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>domainsRejectPreincoming</th>
        <td>Cancel domains transfer</td>
        <td class="left_column">
            <ul>
                <li><b>domains</b> - list of domains, comma separeted</li>
                <li><b>confirm_data</b> - array of data from message</li>
            </ul>
        </td>
    </tr>

    <tr>
        <th>domainGetNSs</th>
        <td>Get name servers of the domain</td>
        <td class="left_column">
            <ul>
                <li><b>domain</b> — domain</li>
                <li><b>id</b> — id</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>domainsGetNSs</th>
        <td>Get name servers of domains</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> — domainGetNSs</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>domainSetNSs</th>
        <td>Установка NS'ов для домена</td>
        <td class="left_column">
            <ul>
                <li><b>domain</b> — domain</li>
                <li><b>nss</b> — nss</li>
                <li><b>id</b> — id</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>domainsSetNSs</th>
        <td>Set name servers for given domains</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> — domainSetNSs</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>domainGetNote</th>
        <td>Get domain note</td>
        <td class="left_column">
            <ul>
                <li><b>domain</b> — domain</li>
                <li><b>id</b> — id</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>domainsGetNote</th>
        <td>Get domains note</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> — domainGetNote</li>
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
        <th>domainRenew</th>
        <td>Domain renew</td>
        <td class="left_column">
            <ul>
                <li><b>domain</b> — domain, *</li>
                <li><b>period</b> — period, *</li>
                <li><b>expires</b> — expires, * — current expiration date</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>domainGetPassword</th>
        <td>Get domain password</td>
        <td class="left_column">
            <ul>
                <li><b>domain</b> — domain</li>
                <li><b>pincode</b> — pincode</li>
                <li><b>id</b> — id</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>domainsGetPassword</th>
        <td>Get domains password</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> — domainGetPassword</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>domainRegenPassword</th>
        <td>Domain regen password</td>
        <td class="left_column">
            <ul>
                <li><b>domain</b> — domain</li>
                <li><b>pincode</b> — pincode</li>
                <li><b>id</b> — id</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>domainsRegenPassword</th>
        <td>Domains regen password</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> — domainRegenPassword</li>
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
        <th>domainGetContacts</th>
        <td>Get contacts of the domain</td>
        <td class="left_column">
            <ul>
                <li><b>domain</b> — domain</li>
                <li><b>id</b> — id</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>domainGetWPContacts</th>
        <td>Get WHOIS protected contacts of the domain</td>
        <td class="left_column">
            <ul>
                <li><b>domain</b> — domain</li>
                <li><b>id</b> — id</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>domainGetContactsInfo</th>
        <td>Get contacts info of the domain</td>
        <td class="left_column">
            <ul>
                <li><b>такие же как</b> — domainGetContacts</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>domainGetWPContactsInfo</th>
        <td>Get WHOIS protected contacts info of the domain</td>
        <td class="left_column">
            <ul>
                <li><b>такие же как</b> — domainGetContactsInfo</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>domainsGetContacts</th>
        <td>Get contacts of given domains</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> — domainGetContacts</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>domainsGetWPContacts</th>
        <td>Get WHOIS protected contacts of given domains</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> — domainGetContacts</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>domainsGetContactsInfo</th>
        <td>Get contacts info of given domains</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> — domainGetContacts</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>domainsGetWPContactsInfo</th>
        <td>Get WHOIS protected contacts info of given domains</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> — domainGetContacts</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>domainSetContacts</th>
        <td>Set domain contacts</td>
        <td class="left_column">
            <ul>
                <li><b>domain</b> — domain</li>
                <li><b>id</b> — id</li>
                <li><b>registrant</b> — eid, *</li>
                <li><b>admin</b> — eid, *</li>
                <li><b>tech</b> — eid, *</li>
                <li><b>billing</b> — eid, *</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>domainsSetContacts</th>
        <td>Set contacts for given domains</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> — domainSetContacts</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>domainEnableAutorenewal</th>
        <td>Enable autorenewal for the domain</td>
        <td class="left_column">
            <ul>
                <li><b>domain</b> — domain</li>
                <li><b>id</b> — id</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>domainDisableAutorenewal</th>
        <td>Disable autorenewal for the domain</td>
        <td class="left_column">
            <ul>
                <li><b>такие же как</b> — domainEnableAutorenewal</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>domainsEnableAutorenewal</th>
        <td>Enable autorenewal for given domains</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> — domainEnableAutorenewal</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>domainsDisableAutorenewal</th>
        <td>Disable autorenewal for given domains</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> — domainEnableAutorenewal</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>domainEnableWhoisProtect</th>
        <td>Enable whois protect for the domain</td>
        <td class="left_column">
            <ul>
                <li><b>domain</b> — domain</li>
                <li><b>id</b> — id</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>domainDisableWhoisProtect</th>
        <td>Enable whois protect for the domain</td>
        <td class="left_column">
            <ul>
                <li><b>такие же как</b> — domainEnableWhoisProtect</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>domainsEnableWhoisProtect</th>
        <td>Enable whois protect for given domains</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> — domainEnableWhoisProtect</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>domainsDisableWhoisProtect</th>
        <td>Disable whois protect for given domains</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> — domainEnableWhoisProtect</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>domainEnableLock</th>
        <td>Enable lock for the domain</td>
        <td class="left_column">
            <ul>
                <li><b>domain</b> — domain</li>
                <li><b>id</b> — id</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>domainDisableLock</th>
        <td>Disable lock for the domain</td>
        <td class="left_column">
            <ul>
                <li><b>такие же как</b> — domainEnableLock</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>domainsEnableLock</th>
        <td>Enable lock for given domains</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> — domainEnableLock</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>domainsDisableLock</th>
        <td>Disable lock for given domains</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> — domainEnableLock</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>domainGetDNS</th>
        <td>Get DNS settings for given domain</td>
        <td class="left_column">
            <ul>
                <li><b>id</b> — id</li>
                <li><b>domain</b> — domain</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>domainsGetDNS</th>
        <td>Get DNS settings for given domains</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> — domainGetDNS</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>domainSetDNS</th>
        <td>Set DNS settings for given domain</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> {
                    <ul>
                        <li><b>name</b> — dnsName</li>
                        <li><b>type</b> — ref</li>
                        <li><b>value</b> — label</li>
                        <li><b>no</b> — id</li>
                        <li><b>ttl</b> — id</li>
                        <li><b>status</b> — ref (ok,new,deleted)</li>
                    </ul>
                    }
                </li>
            </ul>
        </td>

    </tr>
    <tr>
        <th>domainsSetDNS</th>
        <td>Set DNS settings for given domains</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> — domainSetDNS</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>domainPush</th>
        <td>Push domain to given client</td>
        <td class="left_column">
            <ul>
                <li><b>domain</b> — domain</li>
                <li><b>id</b> — id</li>
                <li><b>sender</b> — client, *</li>
                <li><b>receiver</b> — client, *</li>
                <li><b>pincode</b> — pincode</li>
            </ul>
        </td>

    </tr>
    <tr>
        <th>domainsPush</th>
        <td>Push domains to given receivers</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> — domainPush</li>
            </ul>
        </td>
    </tr>

    <tr>
        <th>hdomainGetDNS</th>
        <td>Get DNS settings for given domain</td>
        <td class="left_column">
            <ul>
                <li><b>id</b> — id</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>hdomainsGetDNS</th>
        <td>Get DNS settings for given domains</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> — hdomainGetDNS</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>hdomainSetDNS</th>
        <td>Set DNS settings for given domain</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> {
                    <ul>
                        <li><b>name</b> — dnsName</li>
                        <li><b>type</b> — ref</li>
                        <li><b>value</b> — label</li>
                        <li><b>no</b> — id</li>
                        <li><b>ttl</b> — id</li>
                        <li><b>status</b> — ref (ok,new,deleted)</li>
                    </ul>
                    }
                </li>
            </ul>
        </td>

    </tr>
    <tr>
        <th>hdomainsSetDNS</th>
        <td>Set DNS settings for given domains</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> — domainSetDNS</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>hostsSearch</th>
        <td>Hosts search</td>
        <td class="left_column">
            <ul>
                <li><b>ids</b> — ids</li>
                <li><b>host</b> — labels</li>
                <li><b>domain</b> — labels</li>
                <li><b>domain_ids</b> — ids</li>
                <li><b>note</b> — labels</li>
                <li><b>client</b> — labels</li>
                <li><b>seller</b> — labels</li>
                <li><b>orderby</b> — ref</li>
                <li><b>limit</b> — id</li>
                <li><b>total</b> — id</li>
                <li><b>page</b> — id</li>
                <li><b>count</b> — bool</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>hostGetInfo</th>
        <td>Host get info</td>
        <td class="left_column">
            <ul>
                <li><b>id</b> — id</li>
                <li><b>host</b> — ns</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>hostsGetInfo</th>
        <td>Hosts get info</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> — hostGetInfo</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>hostCreate</th>
        <td>Host create</td>
        <td class="left_column">
            <ul>
                <li><b>host</b> — ns, *</li>
                <li><b>ips</b> — ips</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>hostsCreate</th>
        <td>Hosts create</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> — hostCreate</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>hostUpdate</th>
        <td>Host update</td>
        <td class="left_column">
            <ul>
                <li><b>id</b> — id</li>
                <li><b>host</b> — ns</li>
                <li><b>ips</b> — ips</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>hostsUpdate</th>
        <td>Hosts update</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> — hostUpdate</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>hostDelete</th>
        <td>Host delete</td>
        <td class="left_column">
            <ul>
                <li><b>id</b> — id</li>
                <li><b>host</b> — ns</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>hostsDelete</th>
        <td>Hosts delete</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> — hostDelete</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>contactsSearch</th>
        <td>List/Search contacts</td>
        <td class="left_column">
            <ul>
                <li><b>ids</b> — ids</li>
                <li><b>name</b> — labels</li>
                <li><b>email</b> — labels</li>
                <li><b>client</b> — labels</li>
                <li><b>seller</b> — labels</li>
                <li><b>select</b> — ref</li>
                <li><b>orderby</b> — ref</li>
                <li><b>limit</b> — id</li>
                <li><b>total</b> — id</li>
                <li><b>page</b> — id</li>
                <li><b>count</b> — bool</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>contactGetInfo</th>
        <td>Get contact info</td>
        <td class="left_column">
            <ul>
                <li><b>id</b> — eid, *</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>contactsGetInfo</th>
        <td>Get contacts info</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> — contactGetInfo</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>contactCreate</th>
        <td>Создать контакт</td>
        <td class="left_column">
            <ul>
                <li><b>email</b> — email, *</li>
                <li><b>first_name</b> — label, *</li>
                <li><b>last_name</b> — label</li>
                <li><b>birth_date</b> — date</li>
                <li><b>organization</b> — label</li>
                <li><b>street1</b> — label, *</li>
                <li><b>street2</b> — label</li>
                <li><b>street3</b> — label</li>
                <li><b>city</b> — label, *</li>
                <li><b>province</b> — label</li>
                <li><b>postal_code</b> — label, *</li>
                <li><b>country</b> — ref, *</li>
                <li><b>voice_phone</b> — phone, *</li>
                <li><b>fax_phone</b> — phone</li>
                <li><b>emails</b> — emails</li>
                <li><b>type</b> — ref — один из: person, organization</li>
                <li><b>passport_no</b> — label</li>
                <li><b>passport_date</b> — date</li>
                <li><b>passport_by</b> — label</li>
                <li><b>organization_ru</b> — label — for .ru zone only</li>
                <li><b>inn</b> — label — for .ru zone only</li>
                <li><b>kpp</b> — label — for .ru zone only</li>
                <li><b>director_name</b> — label — for .ru zone only</li>
                <li><b>isresident</b> — boolean — for .ru zone only</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>contactsCreate</th>
        <td>Create contacts</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> — contactCreate</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>contactUpdate</th>
        <td>Update contact</td>
        <td class="left_column">
            <ul>
                <li><b>id</b> — id,*</li>
                <li><b>pincode</b> — pincode</li>
                <li><b>email</b> — email, *</li>
                <li><b>first_name</b> — label, *</li>
                <li><b>last_name</b> — label</li>
                <li><b>birth_date</b> — date</li>
                <li><b>organization</b> — label</li>
                <li><b>street1</b> — label, *</li>
                <li><b>street2</b> — label</li>
                <li><b>street3</b> — label</li>
                <li><b>city</b> — label, *</li>
                <li><b>province</b> — label</li>
                <li><b>postal_code</b> — label, *</li>
                <li><b>country</b> — ref, *</li>
                <li><b>voice_phone</b> — phone, *</li>
                <li><b>fax_phone</b> — phone</li>
                <li><b>emails</b> — emails</li>
                <li><b>passport_no</b> — label</li>
                <li><b>passport_date</b> — date</li>
                <li><b>passport_by</b> — label</li>
                <li><b>organization_ru</b> — label</li>
                <li><b>inn</b> — label</li>
                <li><b>kpp</b> — label</li>
                <li><b>director_name</b> — label</li>
                <li><b>isresident</b> — boolean</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>contactsUpdate</th>
        <td>Update contacts</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> — contactUpdate</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>contactDelete</th>
        <td>Contact delete</td>
        <td class="left_column">
            <ul>
                <li><b><b>id</b> — id,*</b></li>
                <b>
                </b></ul>
            <b>
            </b></td>
    </tr>

    <tr>
        <th>contactsDelete</th>
        <td>Contacts delete</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> — contactDelete</li>
            </ul>
        </td>
    </tr>

    <tr>
        <th>clientCheck</th>
        <td>Check client login/password</td>
        <td class="left_column">
            <ul>
                <li><b>login</b> — client</li>
                <li><b>password</b> — passwrod</li>
            </ul>
        </td>
    </tr>

    <tr>
        <th>clientCreate</th>
        <td>Create new client</td>
        <td class="left_column">
            <ul>
                <li><b>login</b> — client, *</li>
                <li><b>password</b> — password, *</li>
                <li><b>seller</b> — client, *</li>
                <li>all the fields from <b>contactCreate</b></li>
            </ul>
        </td>
    </tr>

    <tr>
        <th>clientGetBalance</th>
        <td>Получить баланс клиента</td>
        <td class="left_column">
            <ul>
                <li><b>id</b> — id</li>
                <li><b>client</b> — client</li>
                <li><b>currency</b> — ref</li>
            </ul>
        </td>
    </tr>

    <tr>
        <th>clientGetPrices</th>
        <td>Get client prices</td>
        <td class="left_column">
            <ul>
                <li><b>client</b> — client</li>
                <li><b>id</b> — id</li>
                <li><b>seller</b> — client</li>
                <li><b>seller_id</b> — id</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>clientsGetPrices</th>
        <td>Get clients prices</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> — clientGetPrices</li>
            </ul>
        </td>
    </tr>

    <tr>
        <th>tariffsGetAvailable</th>
        <td>Get list of available tariffs</td>
        <td class="left_column">
            <ul>
                <li><b>seller</b> - client</li>
            </ul>
            <ul>
                <li><b>type</b> - ref (один из: domain, ovds, svds)</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>tariffGetInfo</th>
        <td>Get tariff info</td>
        <td class="left_column">
            <ul>
                <li><b>id</b> - id</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>tariffsGetInfo</th>
        <td>Get tariffs info</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> - tariffGetInfo</li>
            </ul>
        </td>
    </tr>

    <tr>
        <th>serversSearch</th>
        <td>Search servers</td>
        <td class="left_column">
            <ul>
                <li><b>ids</b> - ids</li>
                <li><b>servers</b> - servers</li>
                <li><b>note</b> - labels</li>
                <li><b>client</b> - client</li>
                <li><b>seller</b> - client</li>
                <li><b>states</b> - refs</li>
                <li><b>orderby</b> - ref</li>
                <li><b>limit</b> - id</li>
                <li><b>page</b> - id</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>serversGetList</th>
        <td>Get servers list</td>
        <td class="left_column">
            <ul>
                <li><b>ids</b> - ids</li>
                <li><b>server</b> - server</li>
                <li><b>client</b> - client</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>serverGetList</th>
        <td>Get servers list</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> - serverGetList</li>
            </ul>
        </td>
    </tr>

    <tr>
        <th>serverGetInfo</th>
        <td>Get server info</td>
        <td class="left_column">
            <ul>
                <li><b>id</b> - id</li>
                <li><b>server</b> - server</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>serversGetInfo</th>
        <td>Get servers info</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> - serverGetInfo</li>
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
                <li><b>amount</b> - id, период, по умолчанию 1</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>serversBuy</th>
        <td>Buy servers</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> - serverBuy</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>serverRenew</th>
        <td>Renew server</td>
        <td class="left_column">
            <ul>
                <li><b>server</b> - server name</li>
                <li><b>id</b> - id</li>
                <li><b>amount</b> - id, период, по умолчанию 1</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>serversRenew</th>
        <td>Renew servers</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> - serverRenew</li>
            </ul>
        </td>
    </tr>

    <tr>
        <th>serverRefuse</th>
        <td>Refuse from server</td>
        <td class="left_column">
            <ul>
                <li><b>id</b> - id</li>
                <li><b>server</b> - server</li>
            </ul>
        </td>
    </tr>

    <tr>
        <th>serverReboot</th>
        <td>Reboot server</td>
        <td class="left_column">
            <ul>
                <li><b>id</b> - id</li>
                <li><b>server</b> - server</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>serversReboot</th>
        <td>Reboot servers</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> - serverReboot</li>
            </ul>
        </td>
    </tr>

    <tr>
        <th>serverReset</th>
        <td>Reset server</td>
        <td class="left_column">
            <ul>
                <li><b>id</b> - id</li>
                <li><b>server</b> - server</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>serversReset</th>
        <td>Reset servers</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> - serverReset</li>
            </ul>
        </td>
    </tr>

    <tr>
        <th>serverShutdown</th>
        <td>Shutdown server</td>
        <td class="left_column">
            <ul>
                <li><b>id</b> - id</li>
                <li><b>server</b> - server</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>serversShutdown</th>
        <td>Shutdown servers</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> - serverShutdown</li>
            </ul>
        </td>
    </tr>

    <tr>
        <th>serverPowerOn</th>
        <td>Server power on</td>
        <td class="left_column">
            <ul>
                <li><b>id</b> - id</li>
                <li><b>server</b> - server</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>serversPowerOn</th>
        <td>Servers power on</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> - serverPowerOn</li>
            </ul>
        </td>
    </tr>

    <tr>
        <th>serverPowerOff</th>
        <td>Server power off</td>
        <td class="left_column">
            <ul>
                <li><b>id</b> - id</li>
                <li><b>server</b> - label</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>serversPowerOff</th>
        <td>Servers power off</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> - serverPowerOff</li>
            </ul>
        </td>
    </tr>

    <tr>
        <th>serverResetup</th>
        <td>Resetup server</td>
        <td class="left_column">
            <ul>
                <li><b>id</b> - id</li>
                <li><b>server</b> - server</li>
                <li><b>osimage</b> - eid,* (см. <b>serverBuy</b>)</li>
                <li><b>panel</b> - ref (см. <b>serverBuy</b>)</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>serversResetup</th>
        <td>Resetup servers</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> - serverResetup</li>
            </ul>
        </td>
    </tr>

    <tr>
        <th>serverEnableVNC</th>
        <td>Enable VNC for server</td>
        <td class="left_column">
            <ul>
                <li><b>id</b> - id</li>
                <li><b>server</b> - label</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>serversEnableVNC</th>
        <td>Enable VNC for servers</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> - serverEnableVNC</li>
            </ul>
        </td>
    </tr>

    <tr>
        <th>serverRegenRootPassword</th>
        <td>Regenerate root password for server</td>
        <td class="left_column">
            <ul>
                <li><b>id</b> - id</li>
                <li><b>server</b> - server</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>serversRegenRootPassword</th>
        <td>Regenerate root password for servers</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> - serverRegenRootPassword</li>
            </ul>
        </td>
    </tr>

    <tr>
        <th>serverBootLive</th>
        <td>Загрузить сервер с Live CD</td>
        <td class="left_column">
            <ul>
                <li><b>id</b> - id</li>
                <li><b>server</b> - server</li>
                <li><b>osimage</b> - eid (один из: freebsdx64.live, gentoox64.live)</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>serversBootLive</th>
        <td>Загрузить сервер с Live CD</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> - serverBootLive</li>
            </ul>
        </td>
    </tr>

    <tr>
        <th>osimagesSearch</th>
        <td>Get list of available OS images</td>
        <td class="left_column">
            <ul>
                <li><b>type</b> - ref (один из: svds - XEN, ovds - OpenVZ)</li>
            </ul>
        </td>
    </tr>

    <tr>
        <th>certificatesSearch</th>
        <td>Certificates search</td>
        <td class="left_column">
            <ul>
                <li><b>id</b> - id</li>
                <li><b>remoteid</b> - eid</li>
                <li><b>parent_id</b> - id</li>
                <li><b>is_parent</b> - boolean</li>
                <li><b>type_id</b> - id</li>
                <li><b>product_id</b> - id</li>
                <li><b>state_id</b> - id</li>
                <li><b>object_id</b> - id</li>
                <li><b>client_id</b> - id</li>
                <li><b>seller_id</b> - id</li>
                <li><b>name</b> - label</li>
                <li><b>type</b> - ref</li>
                <li><b>type_label</b> - label</li>
                <li><b>state</b> - ref</li>
                <li><b>client</b> - client</li>
                <li><b>seller</b> - client</li>
                <li><b>amount</b> - period</li>
                <li><b>begins</b> - date</li>
                <li><b>expires</b> - date</li>
                <li><b>show_chain</b> - boolean</li>
                <li><b>show_new</b> - boolean</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>certificateGetInfo</th>
        <td>Get certificate info from DB</td>
        <td class="left_column">
            <ul>
                <li><b>id</b> - id, *</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>certificatesGetInfo</th>
        <td>et certificates info from DB</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> certificateGetInfo</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>certificateGetData</th>
        <td>Get certificate data</td>
        <td class="left_column">
            <ul>
                <li><b>id</b> - id, *</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>certificatesGetData</th>
        <td>Get certificates data</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> certificatesGetData</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>certificatePurchase</th>
        <td>Purchase certificate</td>
        <td class="left_column">
            <ul>
                <li><b>product</b> - ref</li>
                <li><b>product_id</b> - id</li>
                <li><b>amount</b> - period</li>
                <li><b>client</b> - client</li>
                <li><b>client_id</b> - id</li>
                <li><b>object_id</b> - id</li>
                <li><b>coupon</b> - coupon</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>certificatesPurchase</th>
        <td>Purchase certificates</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> certificatePurchase</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>certificateIssue</th>
        <td>Issue certificate</td>
        <td class="left_column">
            <ul>
                <li><b>id</b> - id, *</li>
                <li><b>admin_id</b> - id, *</li>
                <li><b>tech_id</b> - id, *</li>
                <li><b>org_id</b> - id</li>
                <li><b>dcv_method</b> - ref, *</li>
                <li><b>approver_email</b> - email</li>
                <li><b>approver_emails</b> - emails</li>
                <li><b>webserver_type</b> - ref</li>
                <li><b>dns_names</b> - hdomains</li>
                <li><b>csr</b> - text, *</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>certificatesIssue</th>
        <td>Issue certificates</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> certificateIssue</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>certificateReissue</th>
        <td>Reissue certificate</td>
        <td class="left_column">
            <ul>
                <li><b>такой же как</b> certificateIssue</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>certificatesReissue</th>
        <td>Reissue certificates</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> certificateReissue</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>certificateCancel</th>
        <td>Cancel certificate</td>
        <td class="left_column">
            <ul>
                <li><b>id</b> - id, *</li>
                <li><b>reason</b> - label, *</li>

            </ul>
        </td>
    </tr>
    <tr>
        <th>certificatesCancel</th>
        <td>Cancel certificates</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> certificateCancel</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>certificateRenew</th>
        <td>SSL order renew</td>
        <td class="left_column">
            <ul>
                <li><b>id</b> - id, *</li>
                <li><b>expires</b> - date, *</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>certificatesRenew</th>
        <td>SSL orders renew</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> certificateRenew</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>certificateGenerateCSR</th>
        <td>Create CSR for certificate</td>
        <td class="left_column">
            <ul>
                <li><b>csr_commonname</b> - label, *</li>
                <li><b>csr_organization</b> - label, *</li>
                <li><b>csr_department</b> - label, *</li>
                <li><b>csr_city</b> - label, *</li>
                <li><b>csr_state</b> - label, *</li>
                <li><b>csr_country</b> - label, *</li>
                <li><b>csr_email</b> - email, *</li>
                <li><b>copy_to_email</b> - boolean</li>
                <li><b>client</b> - client</li>
                <li><b>client_id</b> - id</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>certificateGenerateCsr</th>
        <td>Create CSR for certificate</td>
        <td class="left_column">
            <ul>
                <li><b>такой же как</b> certificateGenerateCSR</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>certificateDecodeCSR</th>
        <td>Decode CSR</td>
        <td class="left_column">
            <ul>
                <li><b>csr</b> - text</li>
                <li><b>brand</b> - ref</li>
                <li><b>wildcard</b> - bool</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>certificateDecodeCsr</th>
        <td>Create CSR for certificate</td>
        <td class="left_column">
            <ul>
                <li><b>такой же как</b> certificateDecodeCSR</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>certificateGetWebserverTypes</th>
        <td>Get web server types</td>
        <td class="left_column">
            <ul>
                <li><b>supplier</b> - ref</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>certificateGetDomainEmails</th>
        <td>Get valid approver email addresses for specified domain</td>
        <td class="left_column">
            <ul>
                <li><b>id</b> - id</li>
                <li><b>domain</b> - domain</li>
                <li><b>csr</b> - text</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>certificateSendNotifications</th>
        <td>Send notification</td>
        <td class="left_column">
            <ul>
                <li><b>id</b> - id, *</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>certificatesSendNotifications</th>
        <td>Send notifications</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> certificateSendNotifications</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>certificateRevalidate</th>
        <td>Validate certificate</td>
        <td class="left_column">
            <ul>
                <li><b>id</b> - id, *</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>certificatesRevalidate</th>
        <td>Validate certificates</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> certificateRevalidate</li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>certificateChangeValidation</th>
        <td>Change certificate validation</td>
        <td class="left_column">
            <ul>
                <li><b>id</b> - id, *</li>
                <li><b>dcv_method</b> - ref, * (доступные значения: dns, http, https, email)</li>
                <li><b>approver_email</b> - email</li>
                <li><b>approver_emails</b> - emails</li>

            </ul>
        </td>
    </tr>
    <tr>
        <th>certificateChangeValidation</th>
        <td>Change certificates validation</td>
        <td class="left_column">
            <ul>
                <li><b>массив</b> certificatesRevalidate</li>
            </ul>
        </td>
    </tr>
    </tbody>
</table>
