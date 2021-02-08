<?php

use hiqdev\yii2\modules\pages\models\AbstractPage;
use yii\data\ArrayDataProvider;
use yii\helpers\Html;
use yii\helpers\StringHelper;
use yii\widgets\ListView;

/** @var ArrayDataProvider $dataProvider */

?>
<div class="testimonials">
    <div class="row">
        <div class="col-sm-12">
            <h3><?= 'Articles' ?></h3>
            <hr class="hr-awesome">

            <?= ListView::widget([
                'dataProvider' => $dataProvider,
                'itemOptions' => ['class' => 'item'],
                'itemView' => static fn(AbstractPage $page) => sprintf(
                    "<div class=\"testimonial-content\">
                            <h3>%s</h3>
                            <p>%s</p>
                        </div>",
                    Html::a(Html::encode($page->title), $page->url),
                    StringHelper::countWords($page->text) !== 0 ?
                        strip_tags($page->text) :
                        '',
                ),
                'layout' => "{items}",
                'options' => [
                    'id' => 'testimonials-carousel',
                    'class' => 'owl-carousel',
                ],
            ]) ?>

            <p class="text-center md-mt-50">
                <?= Html::a(Yii::t('hisite', 'SHOW ALL'), ['articles/list'], ['class' => 'mtr-btn button-purple ripple btn-lg order-vps has-ripple']) ?>
            </p>
        </div>
    </div>
</div>

