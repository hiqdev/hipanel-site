<?php

use hiqdev\yii2\modules\pages\components\AdditionalPages;
use yii\helpers\Html;

/**
 * Shared "see also" links list, referenced from several rules documents (the MSA's
 * JURIDICAL NATURE section, the Reseller Agreement's Agreement Structure section, etc.)
 * to avoid duplicating the tab list in every document. The first entries are the fixed
 * tabs every brand gets (plus Cookie Policy, only for brands that set
 * 'rules.cookiePolicyView'); the rest come from whatever AdditionalPages are
 * registered for the current brand (see this project's config/web.php), so this stays
 * in sync automatically as brands add or drop documents.
 */
?>
<ul class="rules-link">
    <li><a href="#termsOfUse"><?= Yii::t('hipanel:pages', 'Master Service Agreement') ?></a></li>
    <li><a href="#privacyPolicy"><?= Yii::t('hipanel:pages', 'Privacy Policy') ?></a></li>
    <?php if (!empty(Yii::$app->params['rules.cookiePolicyView'])) : ?>
        <li><a href="#cookiePolicy"><?= Yii::t('hipanel:pages', 'Cookie Policy') ?></a></li>
    <?php endif ?>
    <li><a href="#cancelationPolicy"><?= Yii::t('hipanel:pages', 'Cancelation policy') ?></a></li>
    <li><a href="#domainRemovalAndAutoRenewalPolicy"><?= Yii::t('hipanel:pages', 'Domain removal and auto renewal Policy') ?></a></li>
    <?php foreach (AdditionalPages::instantiate('additional.rules')->getPages() as $page) : ?>
        <li><?= Html::a($page->getLabel(), '#' . $page->getId()) ?></li>
    <?php endforeach ?>
</ul>
