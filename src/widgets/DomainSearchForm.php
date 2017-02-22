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

use yii\base\Widget;

class DomainSearchForm extends Widget
{
    public $model;

    public $template = '{input}';

    public function run()
    {
        return $this->render((new\ReflectionClass($this))->getShortName(), [
            'model' => $this->model,
            'template' => $this->template,
        ]);
    }
}
