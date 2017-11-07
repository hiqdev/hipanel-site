<?php

use hipanel\site\helpers\SiteHelper;
use yii\helpers\Html;

$this->title = Yii::t('hipanel:site:dns', 'DNS management packs');
$this->params['breadcrumbs'][] = $this->title;
$this->blocks['subTitle'] = Yii::t('hipanel:site:dns', 'Comparing the basic and premium DNS management pack');
$this->blocks['subHeaderClass'] = 'contact';
$data = SiteHelper::getDnsData();
$this->registerCss('
    .pricing-content ul li {
        text-align: left;
        padding: 15px 5px;
    }
');
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="text-center">
                <h3><?= Yii::t('hipanel:site:dns', 'Management packages') ?></h3>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="solidline">
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-lg-offset-2">
            <div class="pricing-box-alt">
                <div class="pricing-heading">
                    <h3><?= Yii::t('hipanel:site:dns', 'BASIC PACKAGE') ?></h3>
                </div>
                <div class="pricing-content">
                    <ul>
                        <?php foreach ($data as $row) : ?>
                            <li>
                                <span class="pull-right">
                                    <?= $row->value->basic ?>
                                </span>
                                <?= $row->label ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="pricing-box-alt">
                <div class="pricing-heading">
                    <h3><?= Yii::t('hipanel:site:dns', 'PREMIUM PACKAGE') ?></h3>
                </div>
                <div class="pricing-content">
                    <ul>
                        <?php foreach ($data as $row) : ?>
                            <li>
                                <span class="pull-right">
                                    <?= $row->value->premium ?>
                                </span>
                                <?= $row->label ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="">
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
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="solidline">
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="text-center">
                <h4><?= Yii::t('hipanel:site:dns', 'Terms of Use for "Premium Package".') ?></h4>
                <div class="newplans_box"></div>
                <p class="text-center">
                    <?= Yii::t('hipanel:site:dns', 'Please note that if you have previously activated the "Premium Package", but do not want to pay for this feature, all previously made settings for domains will remain and will continue to function normally, but you will not be able to change or delete records.') ?>
                </p>
            </div>
        </div>
    </div>
</div>

