<?php

namespace app\widgets;

use Yii;
use yii\base\Widget;

class DomainAvailabilityWidget extends Widget
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
        $view->registerCss(sprintf(".domainavailability { background-image: url(%s); }", $this->$internationalizationImage));
        return $this->render((new\ReflectionClass($this))->getShortName(), []);
    }
}