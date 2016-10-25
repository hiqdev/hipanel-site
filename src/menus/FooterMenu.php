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

class FooterMenu extends \hiqdev\menumanager\Menu
{
    public function items()
    {
        return [
            [
                'label' => Yii::t('hipanel:site', 'Terms of use'),
                'url' => ['/pages/rules'],
            ],
            [
                'label' => Yii::t('hipanel:site', 'Privacy policy'),
                'url' => ['/pages/rules#privacyPolicy'],
            ],
        ];
    }
}
