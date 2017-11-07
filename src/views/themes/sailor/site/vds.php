<?php

/**
 * @var \hipanel\modules\server\models\Package[]
 * @var \hipanel\modules\server\models\Package[] $openvzPackages
 */
use hipanel\site\HipanelSiteAsset;

HipanelSiteAsset::register($this);

$this->title = Yii::t('hipanel:site:vds', 'VDS Pricing');
$this->params['breadcrumbs'][] = $this->title;
$this->blocks['subTitle'] = Yii::t('hipanel:site:vds', 'Hosting by {name} is an optimal and reliable solution for any project at affordable price.', ['name' => Yii::$app->params['organizationName']]);
$this->blocks['subHeaderClass'] = 'dedicated-servers';

$this->registerCss('.products-table { display: table; }');
$this->registerJs("$('.shared-table [data-toggle=\"popover\"]').popover();");

$this->registerCss('
.shared-table table thead th {
    width: 10%;    
}

.h1-name-openvz:before {
    background-position: 15px 5px;
    background-size: 50px;
    height: 50px;
}
');
?>

<div class="vps-text">
    <div class="row">
        <div class="col-md-3 md-pt-20 xs-pb-20">
            <div class="h1-name-xen">XenSSD</div>
        </div>
        <div class="col-md-9">
            <p>
                <?= Yii::t('hipanel:site:vds', 'The main advantage of a VDS based on XEN with SSD is speed. It is more than 250 times faster than a conventional HDD. Due to Xen virtualization type, all resources are assigned to user and the operation of your VDS does not depend on the main server\'s load.') ?>
            </p>
            <p>
                <?= Yii::t('hipanel:site:vds', 'Virtual dedicated server based on Xen is a perfect solution for most medium and large projects because of its performance that is highly competitive with the performance of a dedicated server.') ?>
            </p>
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
<?= $this->render('_hostingPriceBox', ['packages' => $xenPackages]); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="solidline">
            </div>
        </div>
    </div>
</div>
<div class="vps-text">
    <div class="row">
        <div class="col-md-3 xs-pb-20">
            <div class="h1-name-openvz">OpenVZ</div>
        </div>
        <div class="col-md-9">
            <p>
                <?= Yii::t('hipanel:site:vds', 'VPS based on OpenVZ — is an inexpensive and reliable solution for small projects that do not require many resources (HTML web-sites, landing pages, small blogs, personal websites, business cards, etc.). An additional advantage of our VPS based on OpenVZ is utilization of SSD cache system that improves performance of the disk subsystem during frequently accessed data readings.') ?>
            </p>
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
<?= $this->render('_hostingPriceBox', ['packages' => $openvzPackages]); ?>
