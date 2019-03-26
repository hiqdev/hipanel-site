<?php
/**
 * 0domain.name
 *
 * @link      http://0domain.name/
 * @package   0domain.name
 * @license   proprietary
 * @copyright Copyright (c) 2018, AHnames (https://ahnames.com/)
 */

require __DIR__ . '/../config/bootstrap.php';

$config = require \hiqdev\composer\config\Builder::path('web');

(new \yii\web\Application($config))->run();
