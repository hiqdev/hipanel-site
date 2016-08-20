<?php

/*
 * Selling site for HiPanel
 *
 * @link      http://hipanel.com/
 * @package   hipanel-site
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016, HiQDev (http://hiqdev.com/)
 */

namespace hipanel\site\widgets;

class PricingboxWidget extends \yii\base\Widget
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
