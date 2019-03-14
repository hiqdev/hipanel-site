<?php

$this->title = Yii::t('hipanel.site.about', 'About');
$this->params['breadcrumbs'][] = $this->title;
$this->blocks['subHeaderClass'] = 'about';

use yii\helpers\Html; ?>

<div class="about-descr">
    <div class="row">
        <div class="col-sm-12 col-md-10 center-block">
            <h3><?= Yii::t('hipanel.site.about', 'What is {org_name}?', ['org_name' => Yii::$app->params['organization.name']]) ?></h3>
            <div class="titleborder centered">
                <div class="titleborder_left"></div>
                <div class="titleborder_sign"></div>
                <div class="titleborder_right"></div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 text-justify">
            <p class="topspacing">
                <?= Yii::t('hipanel.site.about', 'Originally {org_name} started as a project of {parent_org_name} company. Today it is a completely independent resource, that provides domain registration and hosting (VPS) for over 7 years. {org_name} team — is a staff of professionals with great experience. We strive to provide quality services and optimal solutions for all online projects.', [
                    'org_name' => Html::tag('strong', Yii::$app->params['organization.name']),
                    'parent_org_name' => 'AdvancedHosters',
                ]) ?>
            </p>
            <p>
                <?= Yii::t('hipanel.site.about', '{org_name} customers always receive high quality technical support, an individual approach to solving problems, convenient payment system and regular discounts.', [
                    'org_name' => Html::tag('strong', Yii::$app->params['organization.name'])
                ]) ?>
            </p>
            <p>
                <?= Yii::t('hipanel.site.about', 'We provide reliable web hosting along with powerful networking and system solutions that enable our customers to realize their business goals at any level of complexity. Through our professional expertise and latest technology available on the market, {org_name} provides the most efficient, reliable and easily managed solutions to meet our clients\' needs.', [
                    'org_name' => Html::tag('strong', Yii::$app->params['organization.name'])
                ]) ?>
            </p>
        </div>
    </div>

    <div class="row" style="margin-top: 100px;">
        <div class="col-sm-12 col-md-10 center-block">
            <h3><?= Yii::t('hipanel.site.about', '{org_name} services', ['org_name' => Yii::$app->params['organization.name']]) ?></h3>
            <div class="titleborder centered">
                <div class="titleborder_left"></div>
                <div class="titleborder_sign"></div>
                <div class="titleborder_right"></div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 text-justify">
            <p class="topspacing">
                <?= Yii::t('hipanel.site.about', '{org_name} services are: domain search, registration and transfer, as well as hosting for your projects (VPS). In addition, for users are available:', [
                    'org_name' => Html::tag('strong', Yii::$app->params['organization.name'])
                ]) ?>
            </p>
            <ul>
                <li><?= Yii::t('hipanel.site.about', '{org_name} mobile app for Android;', ['org_name' => Yii::$app->params['organization.name']]) ?></li>
                <li><?= Yii::t('hipanel.site.about', 'convenient control panel of our own design;') ?></li>
                <li><?= Yii::t('hipanel.site.about', 'VPS-clock monitoring;') ?></li>
                <li><?= Yii::t('hipanel.site.about', 'professional technical support 24/7;') ?></li>
            </ul>
            <p><?= Yii::t('hipanel.site.about', 'On this list our services does not end — we are constantly working on new projects, as well as improving existing services.') ?></p>
        </div>
    </div>

    <div class="row" style="margin-top: 100px;">
        <div class="col-sm-12 col-md-10 center-block">
            <h3><?= Yii::t('hipanel.site.about', 'Why {org_name}?', ['org_name' => Yii::$app->params['organization.name']]) ?></h3>
            <div class="titleborder centered">
                <div class="titleborder_left"></div>
                <div class="titleborder_sign"></div>
                <div class="titleborder_right"></div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 text-justify">
            <p class="topspacing">
                <?= Yii::t('hipanel.site.about', 'We understand that reliability and speed are a top priority for internet projects. And we know how to do it. We had a great experience, and we continue to grow, listening to all the customers needs and market trends. With us you can be certain of the best solution!') ?>
            </p>
        </div>
    </div>

    <div class="row" style="margin-top: 100px;">
        <div class="col-sm-12 col-md-10 center-block">
            <h3><?= Yii::t('hipanel.site.about', 'Contact information') ?></h3>
            <div class="titleborder centered">
                <div class="titleborder_left"></div>
                <div class="titleborder_sign"></div>
                <div class="titleborder_right"></div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 text-justify">
            <dl>

                <dt><?= Yii::t('hipanel.site.about', 'Sales') ?></dt>
                <dd>
                    <?= Yii::$app->params['salesEmail'] ?>
                </dd>

                <dt><?= Yii::t('hipanel.site.about', 'Technical Support and Administration') ?></dt>
                <dd>
                    <?= Yii::$app->params['supportEmail'] ?>
                </dd>

                <dt><?= Yii::t('hipanel.site.about', 'Complaints / Abuse reports') ?></dt>
                <dd>
                    <?= Yii::t('hipanel.site.about', 'Notifications about spam, breaches of trademark, illegal or immoral activities of our clients:') ?>
                    <br>
                    <?= Yii::$app->params['abuseEmail'] ?>
                </dd>

                <dt><?= Yii::t('hipanel.site.about', 'Fast communication') ?></dt>
                <dd>
                    ISQ: <?= Yii::$app->params['contactICQ'] ?>
                    <br>
                    Skype: <?= Yii::$app->params['contactSkype'] ?>
                </dd>

                <dt><?= Yii::t('hipanel.site.about', 'Contact information') ?></dt>
                <dd>
                    <address>
                        <?php foreach (['name', 'street', 'city', 'phone', 'reg', 'btw'] as $key) : ?>
                            <?= Yii::$app->params['organization.contact'][$key] ?>
                            <br>
                        <?php endforeach; ?>
                    </address>
                </dd>

            </dl>
        </div>
    </div>

</div>
