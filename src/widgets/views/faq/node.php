<?php

use yii\helpers\Html;

?>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <i class="indicator fa fa-plus-square-o pull-left"></i>
            <?= Html::a($collapse['label'], '#' . 'collapse-' . $collapseId, [
                'data-toggle' => 'collapse',
                'data-parent' => '#' . 'accordion-' . $tabId,
            ]) ?>
        </h4>
    </div>
</div>
<div id="collapse-<?= $collapseId ?>" class="panel-collapse collapse">
    <?php if (isset($collapse['items'])) : ?>
        <?= $this->render('node', []) ?>
    <?php else: ?>
        <?= $this->render('leaf', []) ?>
    <?php endif; ?>
</div>
