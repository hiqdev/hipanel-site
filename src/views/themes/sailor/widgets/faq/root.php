<?php

use yii\helpers\Html;

/** @var array $items */
/** @var \yii\web\View $this */
/** @var \hipanel\site\widgets\Faq $this ->context */
$this->registerCss('
.faq-tabs-white {
    padding: 0;
}
.faq-tabs {
    padding: 0;
    background: none;
    overflow: hidden;
}
.faq-categories ul li a span.badge {
    margin-left: 5px;
    font-size: 11px;
    background: #b2b2b4;
    padding: 4px 7px 5px;
}
.badge {
    border-radius: 4px;
}
');
?>

<div class="faq-tabs-white">
    <div class="row">
        <div class="col-md-12">
            <div id="faq" class="faq-tabs">
                <div class="faq-categories">
                    <ul class="nav nav-tabs">
                        <?php foreach ($items as $tabId => $tab): ?>
                            <li>
                                <?= Html::a(sprintf('%s<span class="badge">%d</span>', $tab['label'], count($tab['items'])), '#tab-' . $tabId, ['data-toggle' => 'tab']) ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="tab-content">
                        <?php foreach ($items as $tabId => $tab) : ?>
                            <div class="tab-pane fade" id="<?= 'tab-' . $tabId ?>">
                                <div id="<?= $tabId ?>" class="panel-group spacing-40">
                                    <?php foreach ($tab['items'] as $itemId => $item) : ?>
                                        <?= $this->render('node', ['item' => $item, 'itemId' => $itemId, 'parentId' => $tabId]) ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="tabbable tabs-top-horizontal">
            </div>
        </div>
    </div>
</div>