<?php

/**
 * @var \hipanel\modules\server\models\Package[] $xenPackages
 * @var \hipanel\modules\server\models\Package[] $openvzPackages
 */
use hipanel\site\HipanelSiteAsset;

HipanelSiteAsset::register($this);

$this->title = Yii::t('hipanel/site/vds', 'VDS Pricing');
$this->blocks['subTitle'] = Yii::t('hipanel/site/vds', 'Hosting by {name} is an optimal and reliable solution for any project at affordable price.', ['name' => Yii::$app->params['organizationName']]);
$this->blocks['subHeaderClass'] = 'dedicated-servers';

$this->registerCss(".products-table { display: table; }");
$this->registerJs("$('.shared-table [data-toggle=\"popover\"]').popover();");

?>

<div class="vps-text">
    <div class="row">
        <div class="col-md-3 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="h1-name-xen">XenSSD</div>
        </div>
        <div class="col-md-9 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="200ms">
            <p>
                <?= Yii::t('hipanel/site/vds', 'The main advantage of a VDS based on XEN with SSD is speed. It is more than 250 times faster than a conventional HDD. Due to Xen virtualization type, all resources are assigned to user and the operation of your VDS does not depend on the main server\'s load.') ?>
            </p>
            <p>
                <?= Yii::t('hipanel/site/vds', 'Virtual dedicated server based on Xen is a perfect solution for most medium and large projects because of its performance that is highly competitive with the performance of a dedicated server.') ?>
            </p>
        </div>
    </div>
</div>
<?= $this->render('_hostingPriceBox', ['packages' => $xenPackages]); ?>


<div class="vps-text">
    <div class="row">
        <div class="col-md-3 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="h1-name-openvz">OpenVZ</div>
        </div>
        <div class="col-md-9 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="200ms">
            <p>
                <?= Yii::t('hipanel/site/vds', 'VPS based on OpenVZ — is an inexpensive and reliable solution for small projects that do not require many resources (HTML web-sites, landing pages, small blogs, personal websites, business cards, etc.). An additional advantage of our VPS based on OpenVZ is utilization of SSD cache system that improves performance of the disk subsystem during frequently accessed data readings.') ?>
            </p>
        </div>
    </div>
</div>
<?= $this->render('_hostingPriceBox', ['packages' => $openvzPackages]); ?>
