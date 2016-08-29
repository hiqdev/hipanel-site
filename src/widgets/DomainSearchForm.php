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

use hipanel\modules\domain\models\Domain;
use Yii;
use yii\base\Widget;

class DomainSearchForm extends Widget
{
    public $model;

    public $dropDownZonesOptions;

    public function run()
    {
        $model = $this->model ?: new Domain(['scenario' => 'check-domain']);
        $model->domain = empty($model->domain) ? Yii::$app->request->get('domain') : $model->domain;
        $model->zone = empty($model->zone) ? Yii::$app->request->get('zone') : $model->zone;

        return $this->render((new\ReflectionClass($this))->getShortName(), compact('model'));
    }
}
