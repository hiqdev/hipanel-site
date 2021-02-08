<?php

use hiqdev\yii2\modules\pages\models\HtmlPage;

/** @var HtmlPage $model */

?>
<div class="blog single">
    <div class="row">
        <div class="col-md-12">
            <article>
                <div class="post-content">
                    <?= $model->getText() ?>
                </div>
            </article>
        </div>
    </div>
</div>
