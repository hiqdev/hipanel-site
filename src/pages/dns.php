<?php

use yii\helpers\Html;

$this->title = Yii::t('hisite', 'DNS management packs');
$this->blocks['subTitle'] = Yii::t('hisite', 'Comparing the basic and premium DNS management pack');

?>

<!-- PRICE BOXES -->
<div class="pricingbox servers">
    <div class="row">
        <div class="col-sm-12 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="200ms">
            <h3><?= Yii::t('hisite', 'Management packages') ?></h3>
            <div class="titleborder dark centered">
                <div class="titleborder_left"></div>
                <div class="titleborder_sign"></div>
                <div class="titleborder_right"></div>
            </div>
        </div>
    </div>

    <div class="row spacing-25">

        <div class="col-sm-4 col-sm-offset-2">
            <div class="pricing-plan absidian wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
                <div class="pricing-title"><?= Yii::t('hisite', 'BASIC PACKAGE') ?></div>
                <div class="pricing-features">
                    <ul>
                        <li><span class="pull-right"><i
                                    class="fa fa-check text-success"></i></span><?= Yii::t('hisite', 'Free DNS-servers located in different data - centers: the Netherlands (NL) and the U.S. (US).') ?>
                        </li>
                        <li><span class="pull-right"><i
                                    class="fa fa-check text-success"></i></span><?= Yii::t('hisite', 'Types of records available for editing: A, AAAA, MX, CNAME, TXT, NS.') ?>
                        </li>
                        <li><span class="pull-right"><i
                                    class="fa fa-check text-success"></i></span><?= Yii::t('hisite', 'Preinstalled settings for Google Apps') ?>
                        </li>
                        <li><span class="pull-right"><i
                                    class="fa fa-check text-success"></i></span><?= Yii::t('hisite', 'Domain auto renewal option') ?>
                        </li>
                        <li><span class="pull-right"><i
                                    class="fa fa-check text-success"></i></span><?= Yii::t('hisite', 'Working with subdomains') ?>
                        </li>
                        <li><span class="pull-right"><span
                                    class="text-danger">5</span></span><?= Yii::t('hisite', 'The total number of A and CName records') ?>
                        </li>
                        <li><span class="pull-right"><i
                                    class="fa fa-times text-danger"></i></span><?= Yii::t('hisite', 'URL and E-mail forwarding') ?>
                        </li>
                        <li><span class="pull-right"><i
                                    class="fa fa-times text-danger"></i></span><?= Yii::t('hisite', 'Editing of SOA record') ?>
                        </li>
                        <li><span class="pull-right"><i
                                    class="fa fa-times text-danger"></i></span><?= Yii::t('hisite', 'Editing of TTL values') ?>
                        </li>
                        <li><span class="pull-right"><i
                                    class="fa fa-times text-danger"></i></span><?= Yii::t('hisite', 'Domain parking') ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="pricing-plan absidian wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
                <div class="pricing-title"><?= Yii::t('hisite', 'PREMIUM PACKAGE') ?></div>
                <div class="pricing-features">
                    <ul>
                        <li><span class="pull-right"><i
                                    class="fa fa-check text-success"></i></span><?= Yii::t('hisite', 'Free DNS-servers located in different data - centers: the Netherlands (NL) and the U.S. (US).') ?>
                        </li>
                        <li><span class="pull-right"><i
                                    class="fa fa-check text-success"></i></span><?= Yii::t('hisite', 'Types of records available for editing: A, AAAA, MX, CNAME, TXT, NS') ?>
                        </li>
                        <li><span class="pull-right"><i
                                    class="fa fa-check text-success"></i></span><?= Yii::t('hisite', 'Preinstalled settings for Google Apps') ?>
                        </li>
                        <li><span class="pull-right"><i
                                    class="fa fa-check text-success"></i></span><?= Yii::t('hisite', 'Domain auto renewal option') ?>
                        </li>
                        <li><span class="pull-right"><i
                                    class="fa fa-check text-success"></i></span><?= Yii::t('hisite', 'Working with subdomains') ?>
                        </li>
                        <li><span class="pull-right"><span
                                    class="text-success">1000</span></span><?= Yii::t('hisite', 'The total number of A and CName records') ?>
                        </li>
                        <li><span class="pull-right"><i
                                    class="fa fa-check text-success"></i></span><?= Yii::t('hisite', 'URL and E-mail forwarding') ?>
                        </li>
                        <li><span class="pull-right"><i
                                    class="fa fa-check text-success"></i></span><?= Yii::t('hisite', 'Editing of SOA record') ?>
                        </li>
                        <li><span class="pull-right"><i
                                    class="fa fa-check text-success"></i></span><?= Yii::t('hisite', 'Editing of TTL values') ?>
                        </li>
                        <li><span class="pull-right"><i
                                    class="fa fa-check text-success"></i></span><?= Yii::t('hisite', 'Domain parking') ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- END OF PRICE BOXES -->

<div class="shared-table">
    <div class="difference">
        <div class="row spacing-25">

            <div class="col-md-9 col-sm-12 center-block">
                <div class="centered">
                    <p><?= Yii::t('hisite', '<strong>Domain</strong> - an alphanumeric name that uniquely identifies a particular website.') ?></p>
                    <p><?= Yii::t('hisite', '{dns} - a network service that provides information about domains. Each computer connected to the Internet has a unique IP-address, made up of many numbers that are difficult to memorize. A Domain Name System (DNS) allows you to replace the numbers with a description of your choice, making it easier to find the correct one.', ['dns' => Html::tag('b', Yii::t('hisite', 'DNS'))]) ?></p>
                    <p><?= Yii::t('hisite', '{a} - a record that binds the hostname to an IP-address where the resource is located.', ['a' => Html::tag('b', Yii::t('hisite', 'А'))]) ?></p>
                    <p><?= Yii::t('hisite', '{aaaa} - a similar record that uses the address of the new Pv6 standard.', ['aaaa' => Html::tag('b', Yii::t('hisite', 'АААА'))]) ?></p>
                    <p><?= Yii::t('hisite', '{cname} - the canonical name or "alias" that is used to redirect requests from one domain name to another.', ['cname' => Html::tag('b', Yii::t('hisite', 'CNAME'))]) ?></p>
                    <p><?= Yii::t('hisite', '{mx} - a record that points to the IP-address of the mail server of a domain.', ['mx' => Html::tag('b', Yii::t('hisite', 'MX'))]) ?></p>
                    <p><?= Yii::t('hisite', '{ns} - indicates the IP-address of the DNS-server for this domain.', ['ns' => Html::tag('b', Yii::t('hisite', 'NS'))]) ?></p>
                    <p><?= Yii::t('hisite', '{txt} - indicates the IP-address that is used by the DNS-server of a domain.', ['txt' => Html::tag('b', Yii::t('hisite', 'TXT'))]) ?></p>
                    <p><?= Yii::t('hisite', '{soa} - a parameter that specifies which server stores the reference entry for your domain, stores the contact information and the caching information about the DNS-server interaction.', ['soa' => Html::tag('b', Yii::t('hisite', 'SOA'))]) ?></p>
                </div>
            </div>

            <div class="col-md-9 col-sm-12 center-block md-mt-50">
                <h3 class="text-center"><?= Yii::t('hisite', 'Terms of Use for "Premium Package".') ?></h3>
                <div class="newplans_box"></div>
                <p class="text-center">
                    <?= Yii::t('hisite', 'Please note that if you have previously activated the "Premium Package", but do not want to pay for this feature, all previously made settings for domains will remain and will continue to function normally, but you will not be able to change or delete records.') ?>
                </p>
            </div>
        </div>
    </div>
</div>

