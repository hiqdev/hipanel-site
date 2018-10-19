<?php

use hipanel\modules\finance\widgets\AvailableMerchants;
use hipanel\site\widgets\DomainPriceTable;
use yii\helpers\Html;
use Yii;

$this->title = '';
$this->params['breadcrumbs'][] = $this->title;

$this->blocks['subHeaderClass'] = 'telegrambot';

?>
<div class="contact-elements">
    <div class="row">
        <div class="col-sm-12">
            <p><?= Yii::t('hipanel:site:telegrambot', 'Meet ah_assistant_bot. The first Telegram bot that makes access to the hosting services much easier!') ?></p>
            <p><?= Yii::t('hipanel:site:telegrambot', "Manage all Advanced Hosting services, without being distracted from messaging, chatting or reading your favorite channels. Don't worry about your projects, since all the information regarding services, resources used and costs are just a few clicks away on your smartphone.") ?></p>
            <p><?= Yii::t('hipanel:site:telegrambot', 'From now on you do not need to write a ticket or go to the control panel in order to:') ?></p>
            <ul>
                <li><?= Yii::t('hipanel:site:telegrambot', 'view a list with of your servers and find out their configurations') ?>;</li>
                <li><?= Yii::t('hipanel:site:telegrambot', 'find out the amount of traffic used in the CDN packages') ?>;</li>
                <li><?= Yii::t('hipanel:site:telegrambot', 'track your account balance') ?>;</li>
                <li><?= Yii::t('hipanel:site:telegrambot', 'get information about the domains renewal date') ?>.</li>
            </ul>
            <p><?= Yii::t('hipanel:site:telegrambot', 'Simply install Telegram app and register once in our bot.') ?></p>
            <p><?= Yii::t('hipanel:site:telegrambot', 'Try easy and convenient monitoring commands! All the necessary notifications are configured with only 2 clicks. Afterwards, you will receive the data about your projects even without entering in Telegram. Depending on the settings the bot will notify you via messages about:') ?></p>
            <ul>
                <li><?= Yii::t('hipanel:site:telegrambot', 'receiving new tickets') ?>;</li>
                <li><?= Yii::t('hipanel:site:telegrambot', 'exceeding tariff limits') ?>;</li>
                <li><?= Yii::t('hipanel:site:telegrambot', 'upcoming funds exhaustion') ?>;</li>
                <li><?= Yii::t('hipanel:site:telegrambot', 'upcoming domain expiry') ?>.</li>
            </ul>
            <p><?= Yii::t('hipanel:site:telegrambot', 'Just type "ah_assistant_bot" in the Telegram search bar and discover amazing ways to manage your hosting services!') ?></p>
        </div>
    </div>
</div>

