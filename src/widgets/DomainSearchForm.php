<?php

namespace app\widgets;

use hipanel\modules\domain\models\Domain;
use Yii;
use yii\base\Widget;

class DomainSearchForm extends Widget
{
    public $model;

    public $dropDownZonesOptions;

    public function run()
    {
        return $this->render((new\ReflectionClass($this))->getShortName(), [
            'model' => $this->model ? : new Domain(['scenario' => 'check-domain']),
            'dropDownZonesOptions' => $this->dropDownZonesOptions ?: [
                'com' => '.com',
                'net' => '.net',
                'org' => '.org',
                'eu' => '.eu',
            ],
        ]);
    }
}