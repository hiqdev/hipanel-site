<?php
use hipanel\modules\domain\models\Domain;

$this->title = Yii::t('hipanel/domainchecker', 'Domain check');
$this->blocks['subHeaderClass'] = 'domainavailability';
$this->blocks['dropDownZonesOptions'] = $dropDownZonesOptions;

?>

<!-- Blog -->
<div class="blog">
    <div class="row">
        <div class="col-sm-8">
            <article>
                <div class="post-content">
                    <div class="domain-list">
                        <?php foreach ($results as $line) : ?>
                            <?= $this->render('_checkDomainLine', ['line' => $line, 'requestedDomain' => $requestedDomain]) ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </article>
        </div>

        <div class="col-sm-4 filters">
            <div class="sidebar">

                <div class="widget">
                    <h3 class="badge"><?= Yii::t('hipanel/domainchecker', 'Status') ?></h3>
                    <ul class="filter-nav" data-filter-group="status">
                        <li class="active"><a href="#" data-filter=""><?= Yii::t('hipanel/domainchecker', 'All') ?></a>
                        </li>
                        <li><a href="#" data-filter=".available"><?= Yii::t('hipanel/domainchecker', 'Available') ?></a>
                        </li>
                        <li><a href="#"
                               data-filter=".unavailable"><?= Yii::t('hipanel/domainchecker', 'Unavailable') ?></a>
                        </li>
                    </ul>
                </div>

                <div class="widget">
                    <h3 class="badge"><?= Yii::t('hipanel/domainchecker', 'Special') ?></h3>
                    <ul class="filter-nav" data-filter-group="status">
                        <li class="active"><a href="#" data-filter=""><?= Yii::t('hipanel/domainchecker', 'All') ?></a>
                        </li>
                        <li><a href="#"
                               data-filter=".popular"><?= Yii::t('hipanel/domainchecker', 'Popular Domains') ?></a></li>
                        <li><a href="#" data-filter=".promotion"><?= Yii::t('hipanel/domainchecker', 'Promotion') ?></a>
                        </li>
                    </ul>
                </div>

                <div class="widget">
                    <h3 class="badge"><?= Yii::t('hipanel/domainchecker', 'Categories') ?></h3>
                    <ul class="filter-nav" data-filter-group="status">
                        <li class="active">
                            <a href="#" data-filter=""><?= Yii::t('hipanel/domainchecker', 'All') ?>
                                <span class="badge"><?= count($results) ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-filter=".adult"><?= Yii::t('hipanel/domainchecker', 'Adult') ?>
                                <span class="badge"><?= Domain::getCategoriesCount('adult', $results) ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-filter=".geo"><?= Yii::t('hipanel/domainchecker', 'GEO') ?>
                                <span class="badge"><?= Domain::getCategoriesCount('geo', $results) ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-filter=".general"><?= Yii::t('hipanel/domainchecker', 'General') ?>
                                <span class="badge"><?= Domain::getCategoriesCount('general', $results) ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-filter=".nature"><?= Yii::t('hipanel/domainchecker', 'Nature') ?>
                                <span class="badge"><?= Domain::getCategoriesCount('nature', $results) ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-filter=".internet"><?= Yii::t('hipanel/domainchecker', 'Internet') ?>
                                <span class="badge"><?= Domain::getCategoriesCount('internet', $results) ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-filter=".sport"><?= Yii::t('hipanel/domainchecker', 'Sport') ?>
                                <span class="badge"><?= Domain::getCategoriesCount('sport', $results) ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-filter=".society"><?= Yii::t('hipanel/domainchecker', 'Society') ?>
                                <span class="badge"><?= Domain::getCategoriesCount('society', $results) ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-filter=".audio_music"><?= Yii::t('hipanel/domainchecker', 'Audio&Music') ?>
                                <span class="badge"><?= Domain::getCategoriesCount('audio_music', $results) ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-filter=".home_gifts"><?= Yii::t('hipanel/domainchecker', 'Home&Gifts') ?>
                                <span class="badge"><?= Domain::getCategoriesCount('home_gifts', $results) ?></span>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

    </div>
</div>
<!-- End of Blog -->
