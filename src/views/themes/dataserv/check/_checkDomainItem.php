<?php
/**
 * @var array
 * @var $state string
 */
use hipanel\modules\domain\models\Domain;
use yii\helpers\Html;
use yii\helpers\Url;

/** @var array $line */
$addToCartPath = '/site/add-to-cart-registration';
$topcartUrl = '/cart/cart/topcart';

$canBuyDomain = Yii::$app->user->isGuest || Yii::$app->user->can('domain.pay');

?>

<div class="domain-iso-line
    <?= Domain::setIsotopeFilterValue($model->zone) ?>
    <?= $model->isAvailable ? 'available' : 'unavailable' ?>
">
    <div
            class="domain-line <?= $model->isAvailable ? 'checked' : '' ?>"
            data-domain="<?= $model->fqdn ?>">
        <div class="row">
            <div class="col-md-5 col-sm-12 col-xs-12">
                <?php if (isset($model->isAvailable)) : ?>
                    <span class="domain-img"><i class="fa fa-globe fa-lg"></i></span>
                <?php else : ?>
                    <span class="domain-img"><i class="fa fa-circle-o-notch fa-spin ga-lg"></i></span>
                <?php endif; ?>
                <?php if ($model->isAvailable) : ?>
                    <span class="domain-name"><?= $model->getDomain() ?></span><span
                            class="domain-zone">.<?= $model->getZone() ?></span>
                <?php else : ?>
                    <span class="domain-name muted"><?= $model->getDomain() ?></span><span
                            class="domain-zone muted">.<?= $model->getZone() ?></span>
                <?php endif; ?>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 text-center">
                <span class="domain-price">
                    <?php if ($model->isAvailable) : ?>
                        <b><?= Yii::$app->formatter->format($model->resource->price, ['currency', $model->resource->currency]) ?></b>
                        <span class="domain-price-year">/ <?= Yii::t('hipanel:domain', 'year') ?></span>

                    <?php elseif ($model->isAvailable === false) : ?>
                        <span class="domain-taken">
                            <?= Yii::t('hipanel:domain', 'Domain is not available') ?>
                        </span>
                    <?php endif; ?>
                </span>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <?php if ($model->isAvailable && $canBuyDomain) : ?>
                    <?= Html::a('<i class="fa fa-cart-plus fa-lg"></i>&nbsp; ' . Yii::t('hipanel:domain', 'Add to cart'), ['/cart/cart/index'], [
                        'data-pjax' => 0,
                        'class' => 'btn btn-success no-radius add-to-cart-button',
                        'data-loading-text' => '<i class="fa fa-circle-o-notch fa-spin fa-lg"></i>&nbsp;&nbsp;' . Yii::t('hipanel:domain', 'Adding'),
                        'data-complete-text' => Yii::t('hipanel:domain', 'Go to cart'),
                        'data-domain-url' => Url::to([$addToCartPath, 'name' => $model->fqdn]),
                        'data-topcart' => Url::toRoute([$topcartUrl]),
                    ]) ?>
                <?php elseif ($model->isAvailable === false) : ?>
                    <?= Html::a('<i class="fa fa-search"></i>&nbsp; ' . Yii::t('hipanel:domain', 'WHOIS'),
                        ['/domain/whois/index', 'domain' => $model->fqdn],
                        ['target' => '_blank', 'class' => 'btn btn-default']) ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
