<?php

use hiqdev\yii2\modules\pages\models\HtmlPage;
use yii\helpers\Html;

/** @var HtmlPage $model */

$model->setMetaData();
$this->title = 'Articles';
$params = Yii::$app->params;

?>
<article>
    <div class="post-content">
        <h2><?= Html::a($model->title, $model->getUrl()) ?></h2>
        <div class="themeta">
            POSTED BY
            <a href="#" title="" rel="author">
                <?= Yii::$app->params['organization.name'] ?>
            </a>
            ON March <?= mt_rand(1, 31) ?> 2021,<a href=""> 0 COMMENTS</a>
        </div>
        <hr>
        <p>
            <?= $model->getText() ?>
        </p>
    </div>
</article>
