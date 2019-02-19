<table class="table table-bordered server-products-table">
    <thead>
    <tr>
        <th>Type</th>
        <th>Description</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th>*</th>
        <td class="left_column">
            Required field, a value should not be empty, not zero, not a blank line and not an empty list.<br>
            Fields without a star are optional and may be omited while calling the command.
        </td>
    </tr>
    <tr>
        <th>id</th>
        <td class="left_column">
            ID. An integer more than zero.<br>
            For example: 314123
        </td>
    </tr>
    <tr>
        <th>ids</th>
        <td class="left_column">
            ID list, comma delimited, space symbols are allowed.<br>
            For example: 1234, 324534, 223423
        </td>
    </tr>
    <tr>
        <th>domain</th>
        <td class="left_column">
            Domain name<br>
            For example: domain.com
        </td>
    </tr>
    <tr>
        <th>domains</th>
        <td class="left_column">
            List of domains, comma delimited, space symbols are allowed.<br>
            For example: domain.com, asdf.net
        </td>
    </tr>
    <tr>
        <th>ns</th>
        <td class="left_column">
            Name servers name.<br>
            For example: ns1.domain.com
        </td>
    </tr>
    <tr>
        <th>nss</th>
        <td class="left_column">
            Name servers list, comma delimited, space symbols are allowed.<br>
            For example: ns1.domain.com, ns2.domain.com
        </td>
    </tr>
    <tr>
        <th>eid</th>
        <td class="left_column">
            Extended ID. Numbers, Latin letters and symbols (underlining, dot, colon, minus) are allowed.<br>
            For example: EID_234234:234—1
        </td>
    </tr>
    <tr>
        <th>password</th>
        <td class="left_column">
            Password (64 symbols max). It should not contain line break symbols: \n, \r.<br>
            For example: We\p!Jie6w
        </td>
    </tr>
    <tr>
        <th>period</th>
        <td class="left_column">
            An integer from 1 to 10. It is used to indicate an amount of years when registering or prolonging.<br>
            For example: 1
        </td>
    </tr>
    <tr>
        <th>date<br>expires</th>
        <td class="left_column">
            Date in ISO format.<br>
            For example: 2012—09—25
        </td>
    </tr>
    <tr>
        <th>ref</th>
        <td class="left_column">
            Identifier (ID). It consists of several numbers, Latin letters and underlining. There is no limitation
            on the first symbol.<br>
            For example: ok<br>
            For example: 7days<br>
            For example: 0001
        </td>
    </tr>
    <tr>
        <th>refs</th>
        <td class="left_column">
            ID list, comma delimited, space symbols are allowed.<br>
            For example: ok, nok, 123
        </td>
    </tr>
    <tr>
        <th>label</th>
        <td class="left_column">
            Almost no limitation on the line. Line break symbols are not allowed.<br>
            For example: This is a client’s name – Ivan Drago
        </td>
    </tr>
    <tr>
        <th>labels</th>
        <td class="left_column">
            Line list, comma delimited, space symbols are allowed. Array transmission is allowed.<br>
            For example: Ivan, Peter, Fedor, John
        </td>
    </tr>
    <tr>
        <th>dnsName</th>
        <td class="left_column">
            An empty string, "*", "@", or string not longer than 100 symbols, composed of not more than 4 parts,
            separated by ".", each of which consists of 1-61 symbols of following types:latin characters, numbers or
            -" and "_"characters ("-" may not be the first and last symbol).<br>
            For example: *, @, n1, a1.b2, a1.b2.c3, a1.b2.c3.d4
        </td>
    </tr>
    </tbody>
</table>
