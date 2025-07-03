<?php
/**
 * 0domain.name
 *
 * @link      http://0domain.name/
 * @package   0domain.name
 * @license   proprietary
 * @copyright Copyright (c) 2018, AHnames (https://ahnames.com/)
 */

use Yiisoft\Composer\Config\Builder;
use yii\web\Application;

(function () {
    require __DIR__ . '/../config/bootstrap.php';

    $host = $_SERVER['HTTP_HOST'];
    $type = (defined('HISITE_TEST') && HISITE_TEST) ? 'web-test' : 'web';
    $path = Builder::path($host . '/' . $type);
    if (!file_exists($path)) {
        $path = Builder::path($type);
    }

    $config = require $path;

    (new Application($config))->run();
})();
