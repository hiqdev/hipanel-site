<?php

use hipanel\assets\IsotopeAsset;
use hipanel\modules\domain\assets\DomainCheckPluginAsset;
use hipanel\modules\domain\models\Domain;

DomainCheckPluginAsset::register($this);
IsotopeAsset::register($this);

$this->registerJs(/** @lang text/javascript */
    <<<'JS'
    function updateCart(topcartUrl, callback) {
        $('#top-cart i').replaceWith('<i class="fa fa-refresh fa-spin"></i>');
        $.post(topcartUrl, function(data) {
            $('#top-cart').replaceWith( data );
        }).done(callback());
    }
    // DOMAIN CHECK
    $(document).on('click', 'a.add-to-cart-button', function(event) {
        event.preventDefault();
        var addToCartElem = $(this);
        addToCartElem.button('loading');
        $.post(addToCartElem.data('domain-url'), function() {
            updateCart(addToCartElem.data('topcart'), function() {
                addToCartElem.button('complete');
                setTimeout(function () {
                    addToCartElem.addClass('disabled');
                }, 0);
            });
        });

        return false;
    });

    $.fn.isOnScreen = function(x, y){

        if(x == null || typeof x == 'undefined') x = 1;
        if(y == null || typeof y == 'undefined') y = 1;

        var win = $(window);

        var viewport = {
            top : win.scrollTop(),
            left : win.scrollLeft()
        };
        viewport.right = viewport.left + win.width();
        viewport.bottom = viewport.top + win.height();

        var height = this.outerHeight();
        var width = this.outerWidth();

        if(!width || !height){
            return false;
        }

        var bounds = this.offset();
        bounds.right = bounds.left + width;
        bounds.bottom = bounds.top + height;

        var visible = (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));

        if(!visible){
            return false;
        }

        var deltas = {
            top : Math.min( 1, ( bounds.bottom - viewport.top ) / height),
            bottom : Math.min(1, ( viewport.bottom - bounds.top ) / height),
            left : Math.min(1, ( bounds.right - viewport.left ) / width),
            right : Math.min(1, ( viewport.right - bounds.left ) / width)
        };

        return (deltas.left * deltas.right) >= x && (deltas.top * deltas.bottom) >= y;
    };

    $('.domain-list').domainsCheck({
        domainRowClass: '.domain-line',
        success: function(data, domain, element) {
            var $elem = $(element).find("div[data-domain='" + domain + "']");
            var $parentElem = $(element).find("div[data-domain='" + domain + "']").parents('div.domain-iso-line').eq(0);
            $elem.replaceWith($(data).find('.domain-line'));
            $parentElem.attr('class', $(data).attr('class'));
            
            return this;
        },
        beforeQueryStart: function (item) {
            var $item = $(item);
            if ($item.isOnScreen() && !$item.hasClass('checked') && $item.is(':visible')) {
                $item.addClass('checked');
                return true;
            }

            return false;
        },
        finally: function () {
            // init Isotope
            var grid = $('.domain-list').isotope({
                itemSelector: '.domain-iso-line',
                layout: 'vertical',
                // disable initial layout
                isInitLayout: false
            });
            //grid.isotope({ filter: '.popular' });
            // bind event
            grid.isotope('on', 'arrangeComplete', function () {
                $('.domain-iso-line').css({'visibility': 'visible'});
                $('.domain-list').domainsCheck().startQuerier();
            });
            // manually trigger initial layout
            grid.isotope();
            // store filter for each group
            var filters = {};
            $('.filters').on('click', 'a', function(event) {
                event.preventDefault();
                // get group key
                var $buttonGroup = $(this).parents('.filter-nav');
                var $filterGroup = $buttonGroup.attr('data-filter-group');
                // set filter for group
                filters[$filterGroup] = $(this).attr('data-filter');
                // combine filters
                var filterValue = concatValues(filters);
                // set filter for Isotope
                grid.isotope({filter: filterValue});

                $('html, body').animate({ scrollTop: $('.domain-form-container').offset().top }, 'fast');
            });
            // change is-checked class on buttons
            $('.filter-nav').each(function(i, buttonGroup) {
                $(buttonGroup).on( 'click', 'a', function(event) {
                    $(buttonGroup).find('.active').removeClass('active');
                    $(this).parents('li').addClass('active');
                });
            });
            // flatten object by concatting values
            function concatValues(obj) {
                var value = '';
                for (var prop in obj) {
                    value += obj[prop];
                }

                return value;
            }
            
            var activeFilters = $('.filters li.active a');
            $('#domain-tabs a').on('shown.bs.tab', function (e) {
                activeFilters.click();
            });
        }
    });

    $(document).on('scroll', function() {
        if ($('.domain-list').length) {
            $('.domain-list').domainsCheck().startQuerier();
        }
    });
JS
);

$this->registerCss('
/* Check domain styles */

.domain-iso-line {
    width: 100%;
    clear: both;
}
.domain-iso-line .domain-line {
    border-bottom: 1px solid #f2f2f2;
    line-height: 59px;
    height: 60px;
    font-size: 18px;
    -webkit-transition: border 0.25s;
    -moz-transition: border 0.25s;
    -o-transition: border 0.25s;
    transition: border 0.25s;
    width: 100%;
}

.filter-nav .active a {
    text-decoration: underline;
    font-weight: bold;
}

.domain-list.tab-content > .tab-pane {
    border: none!important;
}

div.action-button {
    display: flex;
    height: 59px;
}
div.action-button a {
    flex-basis: 100%;
    align-self: center;
}

');
$this->title = Yii::t('hipanel:domain', 'Domain check');
$this->blocks['subHeaderClass'] = 'domainavailability';
$this->blocks['dropDownZonesOptions'] = $dropDownZonesOptions;

?>

<?php $this->beginBlock('subHeader') ?>
<?= $this->render('//site/_domainSearchForm', ['model' => $model, 'zones' => $dropDownZonesOptions]) ?>
<?php $this->endBlock() ?>

<div class="row">
    <div class="col-sm-8">

        <ul id="domain-tabs" class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active">
                <a href="#commons" aria-controls="home" role="tab" data-toggle="tab"><?= Yii::t('hipanel:domain', 'Exact search') ?></a>
            </li>
            <li role="presentation">
                <a href="#suggestions" aria-controls="profile" role="tab" data-toggle="tab"><?= Yii::t('hipanel:domain', 'Similar domains') ?></a>
            </li>
        </ul>

        <div class="domain-list tab-content">

            <div role="tabpanel" class="tab-pane active" id="commons">
                <?php foreach ($results as $model) : ?>
                    <?php if (!$model->isSuggestion) : ?>
                        <?= $this->render('_checkDomainItem', ['model' => $model]) ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <div role="tabpanel" class="tab-pane" id="suggestions">
                <?php $suggestions = array_filter($results, function (\hipanel\modules\domain\forms\CheckForm $model) {
                    return $model->isSuggestion;
                }) ?>

                <?php if (count($suggestions) > 0) : ?>
                    <?php foreach ($suggestions as $model) : ?>
                        <?= $this->render('_checkDomainItem', ['model' => $model]) ?>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="bg-warning clearfix text-center" style="padding: 1rem;">
                        <?= Yii::t('hipanel:domain', "We can't suggest you something similar to entered domain name.") ?>
                    </div>
                <?php endif; ?>
            </div>

        </div>
    </div>

    <div class="col-sm-4 filters">
        <aside class="right-sidebar">

            <div class="widget">
                <h5 class="widgetheading"><?= Yii::t('hipanel/domainchecker', 'Status') ?></h5>
                <ul class="cat filter-nav" data-filter-group="status">
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
                <h5 class="widgetheading"><?= Yii::t('hipanel/domainchecker', 'Special') ?></h5>
                <ul class="cat filter-nav" data-filter-group="status">
                    <li class="active"><a href="#" data-filter=""><?= Yii::t('hipanel/domainchecker', 'All') ?></a>
                    </li>
                    <li><a href="#"
                           data-filter=".popular"><?= Yii::t('hipanel/domainchecker', 'Popular Domains') ?></a></li>
                    <li><a href="#" data-filter=".promotion"><?= Yii::t('hipanel/domainchecker', 'Promotion') ?></a>
                    </li>
                </ul>
            </div>

            <div class="widget">
                <h5 class="widgetheading"><?= Yii::t('hipanel/domainchecker', 'Categories') ?></h5>
                <ul class="cat filter-nav" data-filter-group="status">
                    <li class="active">
                        <a href="#" data-filter=""><?= Yii::t('hipanel/domainchecker', 'All') ?></a>
                        <span>(<?= count($results) ?>)</span>
                    </li>
                    <li>
                        <a href="#" data-filter=".adult"><?= Yii::t('hipanel/domainchecker', 'Adult') ?></a>
                        <span>(<?= Domain::getCategoriesCount('adult', $results) ?>)</span>
                    </li>
                    <li>
                        <a href="#" data-filter=".geo"><?= Yii::t('hipanel/domainchecker', 'GEO') ?></a>
                        <span>((<?= Domain::getCategoriesCount('geo', $results) ?>)</span>
                    </li>
                    <li>
                        <a href="#" data-filter=".general"><?= Yii::t('hipanel/domainchecker', 'General') ?></a>
                        <span>(<?= Domain::getCategoriesCount('general', $results) ?>)</span>
                    </li>
                    <li>
                        <a href="#" data-filter=".nature"><?= Yii::t('hipanel/domainchecker', 'Nature') ?></a>
                        <span>(<?= Domain::getCategoriesCount('nature', $results) ?>)</span>
                    </li>
                    <li>
                        <a href="#" data-filter=".internet"><?= Yii::t('hipanel/domainchecker', 'Internet') ?></a>
                        <span>(<?= Domain::getCategoriesCount('internet', $results) ?>)</span>
                    </li>
                    <li>
                        <a href="#" data-filter=".sport"><?= Yii::t('hipanel/domainchecker', 'Sport') ?></a>
                        <span>(<?= Domain::getCategoriesCount('sport', $results) ?>)</span>
                    </li>
                    <li>
                        <a href="#" data-filter=".society"><?= Yii::t('hipanel/domainchecker', 'Society') ?></a>
                        <span>(<?= Domain::getCategoriesCount('society', $results) ?>)</span>
                    </li>
                    <li>
                        <a href="#" data-filter=".audio_music"><?= Yii::t('hipanel/domainchecker', 'Audio&Music') ?></a>
                        <span>(<?= Domain::getCategoriesCount('audio_music', $results) ?>)</span>
                    </li>
                    <li>
                        <a href="#" data-filter=".home_gifts"><?= Yii::t('hipanel/domainchecker', 'Home&Gifts') ?></a>
                        <span>(<?= Domain::getCategoriesCount('home_gifts', $results) ?>)</span>
                    </li>
                </ul>
            </div>
        </aside>
    </div>
</div>
