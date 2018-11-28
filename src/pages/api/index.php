<?php

use yii\helpers\Html;

$this->title = Yii::t('hipanel.site.api', 'Reseller API');
$this->blocks['subTitle'] = Yii::t('hipanel.site.api', 'We provide full featured HTTP API for all our resellers.');

$this->registerJs(<<<JS
    $('.collapse').on('show.bs.collapse', function() {
        var i = $(this).parent().find('i').toggleClass('fa-plus-square-o fa-minus-square-o');
    }).on('hide.bs.collapse', function() {
        var i = $(this).parent().find('i').toggleClass('fa-minus-square-o fa-plus-square-o');
    });
JS
);
?>

<div class="vps-features-tabs">
    <div class="row">
        <div class="col-sm-12">
            <div id="accordion" class="example panel-group">
                <?php foreach ([
                                   'general-information' => ['label' => Yii::t('hipanel.site.api', 'General information')],
                                   'detailed-examples' => ['label' => Yii::t('hipanel.site.api', 'Detailed examples')],
                                   'type-directory' => ['label' => Yii::t('hipanel.site.api', 'Type directory')],
                                   'command-directory' => ['label' => Yii::t('hipanel.site.api', 'Command directory')],
                               ] as $key => $options) : ?>
                    <div class="panel panel-default">

                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <i class="indicator fa fa-plus-square-o pull-left"></i>
                                <?= Html::a($options['label'], "#{$key}", [
                                    'data' => [
                                        'parent' => '#accordion',
                                        'toggle' => 'collapse',
                                    ],
                                ]) ?>
                            </h4>
                        </div>

                        <div id="<?= $key ?>" class="panel-collapse collapse" aria-expanded="true">
                            <div class="panel-body">
                                <?= $this->render("_{$key}") ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<div class="features-tabs" style="padding-top: 0;">
    <div class="row">
        <div class="col-sm-12">
            <div class="tabbable tabs-top-horizontal">
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="managed">
                        <h4><?= Yii::t('hipanel.site.api', 'Making order and other questions') ?></h4>
                        <p class="subtitle"><?= Yii::t('hipanel.site.api', 'Ways of organizing cooperation') ?></p>

                        <div class="row spacing-25">
                            <div class="col-sm-12">
                                <?= $this->render('_making_order_and_other_questions') ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
