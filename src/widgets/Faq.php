<?php

namespace hipanel\site\widgets;

use yii\base\Widget;

class Faq extends Widget
{
    public $items = [];

    public function run()
    {
        return $this->render('faq/root', [
            'items' => $this->items,
        ]);
    }

    public function getTabs($items)
    {
        return [];
    }

    public function getCollapses($items)
    {
        return [];
    }
}