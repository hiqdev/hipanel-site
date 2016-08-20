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

use Yii;

class DomainAvailabilityWidget extends \uii\base\Widget
{
    public $backgroundImageEn = 'https://ahnames.com/www/flat.skin/images/banner/afilias/en.jpg';

    public $backgroundImageRu = 'https://ahnames.com/www/flat.skin/images/banner/afilias/ru.jpg';

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $view = Yii::$app->view;
        $internationalizationImage = 'backgroundImage' . ucfirst(Yii::$app->language);
        $view->registerCss(sprintf('.domainavailability { background-image: url(%s); }', $this->$internationalizationImage));

        return $this->render((new\ReflectionClass($this))->getShortName(), []);
    }
}
