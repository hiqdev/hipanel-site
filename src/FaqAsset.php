<?php

namespace hipanel\site;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;

class FaqAsset extends AssetBundle
{
    public $sourcePath = '@hipanel/site/assets/js';

    public $js = [
        YII_ENV_PROD ? 'faq.min.js' : 'faq.js',
    ];

    public $depends = [
        JqueryAsset::class,
    ];
}
