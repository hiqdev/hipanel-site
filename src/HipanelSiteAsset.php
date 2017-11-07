<?php
/**
 * Selling site for HiPanel
 *
 * @link      http://hipanel.com/
 * @package   hipanel-site
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2017, HiQDev (http://hiqdev.com/)
 */

namespace hipanel\site;

use yii\web\AssetBundle;

class HipanelSiteAsset extends AssetBundle
{
    public $sourcePath = '@hipanel/site/assets';

    public $css = [
        'css/hipanel-site.css',
    ];
}
