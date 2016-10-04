<?php

namespace hipanel\site;

use yii\web\AssetBundle;

class HipanelSiteAsset extends AssetBundle
{
    public $sourcePath = '@hipanel/site/assets';

    public $css = [
        'css/hipanel-site.css',
    ];
}
