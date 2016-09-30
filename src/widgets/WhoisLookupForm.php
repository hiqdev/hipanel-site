<?php

namespace hipanel\site\widgets;

use hipanel\modules\domain\models\Whois;
use yii\base\Widget;

class WhoisLookupForm extends Widget
{
    public $model;

    public function run()
    {
        return $this->render('WhoisLookupForm', ['model' => $this->model ?: new Whois()]);
    }
}
