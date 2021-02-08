<?php

use yii\widgets\LinkPager;
use yii\widgets\ListView;

?>
<div class="blog">
    <div class="row">
        <div class="col-md-12">
            <?= ListView::widget([
                'layout' => "{items}\n{pager}",
                'options' => [
                    'class' => 'posts',
                ],
                'itemOptions' => [
                    'class' => 'post',
                ],
                'dataProvider' => $dataProvider,
                'pager' => [
                    'class' => LinkPager::class,
                    'prevPageLabel' => Yii::t('hiqdev:pages', 'Newer'),
                    'nextPageLabel' => Yii::t('hiqdev:pages', 'Older'),
                ],
                'itemView' => '_teaser',
            ]) ?>
        </div>
    </div>
</div>
