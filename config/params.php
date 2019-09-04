<?php
/**
 * Selling site for HiPanel
 *
 * @link      http://hipanel.com/
 * @package   hipanel-site
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2017, HiQDev (http://hiqdev.com/)
 */

return [
    'hipanel.notPanel'            => true,
    'hipanel.site.defaultTheme'   => 'dataserv',

    'api.demo.url'                => 'https://demo-api.ahnames.com',
    'api.prod.url'                => 'https://api.ahnames.com',

    'module.pages.additional.rules'      => [
        'Domain Name Registration Agreement' => [
            'path' => '@hipanel/site/pages/rules/_registration_agreement.php',
            'dictionary' => 'hipanel:pages',
            'params' => [],
        ],
    ],
];
