<?php

/*
 * Selling site for HiPanel
 *
 * @link      http://hipanel.com/
 * @package   hipanel-site
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016, HiQDev (http://hiqdev.com/)
 */

namespace hipanel\site\menus;

use Yii;

class MainMenu extends \hiqdev\menumanager\Menu
{
    protected $_addTo = 'main';

    public function items()
    {
        return [
            ['label' => Yii::t('hisite', 'VDS'), 'url' => ['/site/vds']],
            ['label' => Yii::t('hisite', 'Domains'), 'url' => ['/site/domains']],
            ['label' => Yii::t('hisite', 'Transfer'), 'url' => ['/site/transfer']],
            ['label' => Yii::t('hisite', 'DNS'), 'url' => ['/site/dns']],
            ['label' => Yii::t('hisite', 'Contact'), 'url' => ['/site/contact']],
            ['label' => Yii::t('hisite', 'FAQ'), 'url' => ['/site/faq']],
            ['label' => Yii::t('hisite', 'Rules'), 'url' => ['/site/rules']],
        ];
    }
}
