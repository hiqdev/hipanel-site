<?php


use yii\helpers\Html;

/** @var array $items */
/** @var \yii\web\View $this */
/** @var \hipanel\site\widgets\Faq $this ->context */

$this->registerJs("
$('.collapse').on('show.bs.collapse', function(event){
    var i = $(this).siblings().find('i').eq(0);
    i.toggleClass('fa-plus-square-o fa-minus-square-o');
    event.stopPropagation();
}).on('hide.bs.collapse', function(event){
    var i = $(this).siblings().find('i').eq(0);
    i.toggleClass('fa-minus-square-o fa-plus-square-o');
    event.stopPropagation();
});

$('.faq-categories li a').click(function(){
    $('.panel-collapse.in').collapse('hide');
});
");
?>

<div class="faq-tabs">
    <div class="row">
        <div class="col-sm-12">
            <div class="faq-categories">
                <ul>
                    <?php foreach ($this->context->getTabs($items) as $tabId => $tab): ?>
                        <li><?= Html::a($tab['label'], '#' . $tabId, ['data-toggle' => 'tab']) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="faq-tabs-white">
    <div class="row">
        <div class="col-md-12">
            <div class="tabbable tabs-top-horizontal">
                <div class="tab-content">
                    <?php foreach ($this->context->getTabs($items) as $tabId => $tab) : ?>
                        <?= $this->render('node', []) ?>
                        <div class="tab-pane fade" id="<?= $tabId ?>">
                            <div id="accordion-<?= $tabId ?>" class="panel-group spacing-40">
                                <?php foreach ($this->context->getCollapses() as $collapseId => $collapse) : ?>
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
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>