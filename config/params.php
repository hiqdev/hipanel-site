<?php
/**
 * Selling site for HiPanel
 *
 * @link      http://hipanel.com/
 * @package   hipanel-site
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2017, HiQDev (http://hiqdev.com/)
 */

use vintage\recaptcha\helpers\RecaptchaConfig;

return [
    'hipanel.notPanel'            => true,
    'hipanel.site.defaultTheme'   => 'dataserv',

    'api.demo.url'                => 'https://demo-api.ahnames.com',
    'api.prod.url'                => 'https://api.ahnames.com',

    'reCaptcha.siteKey'           => '6Lf7UL8UAAAAAPmAGnm7sQrI80CPvV8VRBADmPQc',
    'reCaptcha.secretKey'         => '6Lf7UL8UAAAAAIXs76IU5bDF8YxZXtrAz7y3D0iD',

    RecaptchaConfig::SITE_KEY     => '6Lf7UL8UAAAAAPmAGnm7sQrI80CPvV8VRBADmPQc',
    RecaptchaConfig::PRIVATE_KEY  => '6Lf7UL8UAAAAAIXs76IU5bDF8YxZXtrAz7y3D0iD',
];
