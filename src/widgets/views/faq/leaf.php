<?php

use yii\helpers\Html;

?>
<div class="panel-heading">
    <h4 class="panel-title">
        <i class="indicator fa fa-plus-square-o pull-left"></i>
        <?= Html::a($item['label'], '', [
            'data' => [
                'toggle' => 'collapse',
                'parent' => '#accordion',
            ]
        ]) ?>
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">HOW TO TRANSFER EMAIL ACCOUNTS AND MESSAGES BETWEEN CPANEL SERVERS?</a>
    </h4>
</div>
<div id="collapse2" class="panel-collapse collapse">
    <div class="panel-body">
        <?= $this->render($item['view']) ?>
    </div>
</div>
