<?php

namespace app\widgets;

class CalltoactionWidget extends \yii\base\Widget
{
    public function init()
    {
        parent::init();
    }

    public function run()
    {
        return $this->render((new \ReflectionClass($this))->getShortName(), []);
    }
}