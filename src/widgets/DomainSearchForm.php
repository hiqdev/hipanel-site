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

class DomainSearchForm extends \yii\base\Widget
{
    public $model;

    public $dropDownZonesOptions;

    public function run()
    {
        return $this->render((new\ReflectionClass($this))->getShortName(), [
            'model' => $this->model ?: new Domain(['scenario' => 'check-domain']),
            'dropDownZonesOptions' => $this->dropDownZonesOptions ?: [
                'com' => '.com',
                'net' => '.net',
                'org' => '.org',
                'eu' => '.eu',
            ],
        ]);
    }
}
