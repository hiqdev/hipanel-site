<?php

use hiqdev\yii2\modules\pages\models\HtmlPage;
use yii\helpers\Html;

/** @var HtmlPage $model */

$model->setMetaData();
$this->title = 'Articles';

?>
<article>
    <div class="post-content">
        <h2><?= Html::a($model->title, $model->getUrl()) ?></h2>
        <div class="themeta">
            POSTED BY
            <a href="#" title="Posts by Ocean Themes" rel="author">
                HiQDev
            </a>
            ON March <?= mt_rand(1, 31) ?> 2021,<a href=""> 0 COMMENTS</a>
        </div>
        <hr>
        <p>
            <?= $model->getText() ?>
        </p>
    </div>
</article>
