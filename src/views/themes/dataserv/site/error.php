<?php

use yii\helpers\Html;

$this->registerCss('
section#error-page {
    margin-top: 20px;
    margin-bottom: 20px;
    min-height: 350px;
}
.error-container {
    margin: 40px auto 100px auto;
    padding: 0 10px;
    max-width: 500px;
}
.header-lined {
    text-align: center;
}
');
?>
<section id="error-page" class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="error-container">

                <div class="header-lined">
                    <?= Html::tag('h3', $name) ?>
                </div>

                <div class="alert alert-danger text-center">
                    <?= $message ?>
                </div>

            </div>
        </div>
    </div>
</section>
