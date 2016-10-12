<?php

use hipanel\site\helpers\SiteHelper;
use yii\helpers\Html;

$this->title = Yii::t('hipanel:site:dns', 'DNS management packs');
$this->blocks['subTitle'] = Yii::t('hipanel:site:dns', 'Comparing the basic and premium DNS management pack');
$this->blocks['subHeaderClass'] = 'contact';
$data = SiteHelper::getDnsData();
?>

<!-- PRICE BOXES -->
<div class="pricingbox servers">
    <div class="row">
        <div class="col-sm-12 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="200ms">
            <h3><?= Yii::t('hipanel:site:dns', 'Management packages') ?></h3>
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
                <div class="pricing-title"><?= Yii::t('hipanel:site:dns', 'BASIC PACKAGE') ?></div>
                <div class="pricing-features">
                    <ul>
                        <?php foreach ($data as $row) : ?>
                            <li>
                                <span class="pull-right"><?= $row->value->basic ?></span><?= $row->label ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="pricing-plan absidian wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
                <div class="pricing-title"><?= Yii::t('hipanel:site:dns', 'PREMIUM PACKAGE') ?></div>
                <div class="pricing-features">
                    <ul>
                        <?php foreach ($data as $row) : ?>
                            <li>
                                <span class="pull-right"><?= $row->value->premium ?></span><?= $row->label ?>
                            </li>
                        <?php endforeach; ?>
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
                    <p><?= Yii::t('hipanel:site:dns', '<strong>Domain</strong> - an alphanumeric name that uniquely identifies a particular website.') ?></p>
                    <p><?= Yii::t('hipanel:site:dns', '{dns} - a network service that provides information about domains. Each computer connected to the Internet has a unique IP-address, made up of many numbers that are difficult to memorize. A Domain Name System (DNS) allows you to replace the numbers with a description of your choice, making it easier to find the correct one.', ['dns' => Html::tag('b', Yii::t('hipanel:site:dns', 'DNS'))]) ?></p>
                    <p><?= Yii::t('hipanel:site:dns', '{a} - a record that binds the hostname to an IP-address where the resource is located.', ['a' => Html::tag('b', Yii::t('hipanel:site:dns', 'А'))]) ?></p>
                    <p><?= Yii::t('hipanel:site:dns', '{aaaa} - a similar record that uses the address of the new Pv6 standard.', ['aaaa' => Html::tag('b', Yii::t('hipanel:site:dns', 'АААА'))]) ?></p>
                    <p><?= Yii::t('hipanel:site:dns', '{cname} - the canonical name or "alias" that is used to redirect requests from one domain name to another.', ['cname' => Html::tag('b', Yii::t('hipanel:site:dns', 'CNAME'))]) ?></p>
                    <p><?= Yii::t('hipanel:site:dns', '{mx} - a record that points to the IP-address of the mail server of a domain.', ['mx' => Html::tag('b', Yii::t('hipanel:site:dns', 'MX'))]) ?></p>
                    <p><?= Yii::t('hipanel:site:dns', '{ns} - indicates the IP-address of the DNS-server for this domain.', ['ns' => Html::tag('b', Yii::t('hipanel:site:dns', 'NS'))]) ?></p>
                    <p><?= Yii::t('hipanel:site:dns', '{txt} - indicates the IP-address that is used by the DNS-server of a domain.', ['txt' => Html::tag('b', Yii::t('hipanel:site:dns', 'TXT'))]) ?></p>
                    <p><?= Yii::t('hipanel:site:dns', '{soa} - a parameter that specifies which server stores the reference entry for your domain, stores the contact information and the caching information about the DNS-server interaction.', ['soa' => Html::tag('b', Yii::t('hipanel:site:dns', 'SOA'))]) ?></p>
                </div>
            </div>

            <div class="col-md-9 col-sm-12 center-block md-mt-50">
                <h4 class="text-center"><?= Yii::t('hipanel:site:dns', 'Terms of Use for "Premium Package".') ?></h4>
                <div class="newplans_box"></div>
                <p class="text-center">
                    <?= Yii::t('hipanel:site:dns', 'Please note that if you have previously activated the "Premium Package", but do not want to pay for this feature, all previously made settings for domains will remain and will continue to function normally, but you will not be able to change or delete records.') ?>
                </p>
            </div>
        </div>
    </div>
</div>

