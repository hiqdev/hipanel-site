<?php

namespace hipanel\site\widgets;

use hipanel\site\FaqAsset;
use yii\base\Widget;

class Faq extends Widget
{
    public $items = [];

    public function run()
    {
        FaqAsset::register($this->view);

        return $this->render('faq/root', [
            'items' => $this->items,
        ]);
    }
}
