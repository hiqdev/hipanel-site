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
