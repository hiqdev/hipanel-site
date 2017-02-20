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

use hipanel\modules\domain\forms\CheckForm;
use Yii;
use yii\base\Widget;

class DomainSearchForm extends Widget
{
    public $model;

    public $dropDownZonesOptions;

    public $template = '{field}';

    public function run()
    {
        $model = $this->model ?: new CheckForm();
        $model->fqdn = empty($model->fqdn) ? Yii::$app->request->get('fqdn') : $model->fqdn;

        return $this->render((new\ReflectionClass($this))->getShortName(), [
            'model' => $model,
            'template' => $this->template,
        ]);
    }
}
