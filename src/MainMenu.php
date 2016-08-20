<?php

namespace hiqdev\providersite;

use Yii;

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
