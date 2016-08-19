<?php

namespace hisite;

use Yii;

class MainMenu extends FooterMenu
{
    protected $_addTo = 'footer';

    public function items()
    {
        $items = parent::items();
        unset($items['other']);

        return $items;
    }
}
