<?php

/** @var array $resources */
/** @var array $brands */
/** @var array $secureProductFeatures */

/** @var array $amountProductFeatures */

$this->registerCss(".certificate-order .label { font-size: 60%; }");

?>
<div class="blog">
    <div class="row">
        <div class="col-md-8">
            <div id="filter-display" style="display: none"></div>
            <article class="info-box hidden-xs">
                <div class="info-box-content ca-header post-content">
                    <div class="sq">
                        <a href="#" class="ca-sort-link" data-sort-value="name">
                            <?= Yii::t('hipanel:certificate', 'Certificate name') ?>
                        </a>
                    </div>
                    <div class="sq text-center">
                        <a href="#" class="ca-sort-link" data-sort-value="fc">
                            <?= Yii::t('hipanel:certificate', 'Features') ?>
                        </a>
                    </div>
                    <div class="sq text-center">
                        <a href="#" class="ca-sort-link" data-sort-value="price">
                            <?= Yii::t('hipanel:certificate', 'Price') ?>
                        </a>
                    </div>
                </div>
            </article>
            <div class="certificate-order">
                <?php foreach ($resources as $resource) : ?>
                    <?= $this->context->widgetRender('_orderRow', compact('resource')) ?>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="col-md-4 filters">
            <div class="sidebar">
                <div class="widget">
                    <h3 class="badge"><?= Yii::t('hipanel:certificate', 'SSL Products') ?></h3>
                    <ul class="nav nav-pills nav-stacked filter-type filter" data-filter-group="secureType">
                        <?php foreach ($secureProductFeatures as $key => $filter) : ?>
                            <li data-filter=".<?= $key ?>">
                                <b><?= $filter['label'] ?></b>
                                <div class="icheck pull-left" style="margin-right: 1rem">
                                    <input type="checkbox" name="<?= $key ?>">
                                </div>
                                <span><?= $filter['text'] ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="widget">
                    <ul class="nav nav-pills nav-stacked filter-type filter" data-filter-group="amountType">
                        <?php foreach ($amountProductFeatures as $key => $filter) : ?>
                            <li data-filter=".<?= $key ?>">
                                <b><?= $filter['label'] ?></b>
                                <div class="icheck pull-left" style="margin-right: 1rem">
                                    <input type="checkbox" name="<?= $key ?>">
                                </div>
                                <span><?= $filter['text'] ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="widget">
                    <h3 class="badge"><?= Yii::t('hipanel:certificate', 'SSL Brands') ?></h3>
                    <ul class="nav nav-pills nav-stacked filter-brand filter" data-filter-group="brand">
                        <?php foreach ($brands as $key => $brand) : ?>
                            <li data-filter=".<?= $key ?>">
                                <b><?= $brand['label'] ?></b>
                                <div class="icheck pull-left" style="margin-right: 1rem">
                                    <input type="checkbox" name="<?= $key ?>">
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

