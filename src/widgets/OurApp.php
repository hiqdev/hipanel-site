<?php
/**
 * Selling site for HiPanel
 *
 * @link      http://hipanel.com/
 * @package   hipanel-site
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2017, HiQDev (http://hiqdev.com/)
 */

namespace hipanel\site\widgets;

use yii\base\Widget;

class OurApp extends Widget
{
    public function init()
    {
        parent::init();
    }

    public function run()
    {
        return $this->render((new\ReflectionClass($this))->getShortName(), []);
    }
}
