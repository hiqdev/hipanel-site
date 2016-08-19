<?php

namespace hisite;

use Yii;

class MainMenu extends \hiqdev\menumanager\Menu
{
    protected $_addTo = 'main';

    public function items()
    {
        return [
            'domains' => [
                'label' => Yii::t('hisite', 'Domains'),
                'url'   => '#',
                'items' => [
                    ['label' => Yii::t('hisite', 'Prices'), 'url' => ['/domain/prices']],
                    ['label' => Yii::t('hisite', 'Advantages'), 'url' => ['/domain/advantages']],
                    ['label' => Yii::t('hisite', 'Transfer'), 'url' => ['/domainchecker/transfer/index']],
                    ['label' => Yii::t('hisite', 'Premium Package'), 'url' => ['/domain/premium-package']],
                    ['label' => Yii::t('hisite', 'Whois lookup'), 'url' => ['/domain/whois-lookup']],
                ],
            ],
            'hosting' => [
                'label' => Yii::t('hisite', 'Hosting'),
                'url'   => '#',
                'items' => [
                    ['label' => Yii::t('hisite', 'XEN SSD'), 'url' => ['/hosting/xen-ssd']],
                    ['label' => Yii::t('hisite', 'OpenVZ'), 'url' => ['/hosting/open-vz']],
                    ['label' => Yii::t('hisite', 'Tariffs details'), 'url' => ['/hosting/tariffs-details']],
                    ['label' => Yii::t('hisite', 'Advantages'), 'url' => ['/hosting/advantages']],
                    ['label' => Yii::t('hisite', 'What is VDS'), 'url' => ['/hosting/what-is-vds']],
                ],
            ],
            'resellers' => [
                'label' => Yii::t('hisite', 'For resellers'),
                'url'   => '#',
                'items' => [
                    ['label' => Yii::t('hisite', 'Prices'), 'url' => ['/reseller/prices']],
                    ['label' => Yii::t('hisite', 'Advantages'), 'url' => ['/reseller/advantages']],
                    ['label' => Yii::t('hisite', 'API'), 'url' => ['/reseller/api']],
                ],
            ],
            'help' => [
                'label' => Yii::t('hisite', 'Help'),
                'url'   => '#',
                'items' => [
                    ['label' => Yii::t('hisite', 'FAQ'), 'url' => ['/help/faq']],
                    ['label' => Yii::t('hisite', 'Create ticket'), 'url' => ['/help/ticket']],
                    ['label' => Yii::t('hisite', 'Terms of use'), 'url' => ['/help/rules']],
                ],
            ],
            'other' => [
                'label' => Yii::t('hisite', 'Help'),
                'url'   => '#',
                'items' => [
                    ['label' => Yii::t('hisite', 'About us'), 'url' => ['/site/about']],
                    ['label' => Yii::t('hisite', 'Contacts'), 'url' => ['/pages/contacts']],
                    ['label' => Yii::t('hisite', 'News'), 'url' => ['/news']],
                    ['label' => Yii::t('hisite', 'Promotions'), 'url' => ['/news/promotions']],
                    ['label' => Yii::t('hisite', 'Loyalty program'), 'url' => ['/pages/loyalty']],
                ],
            ],
        ];
    }
}
