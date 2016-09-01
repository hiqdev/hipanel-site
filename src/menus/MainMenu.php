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

class MainMenu extends FooterMenu
{
    protected $_addTo = 'main';

    public function items()
    {
        $items = parent::items();
        unset($items['other']);

        return $items;
    }
}
