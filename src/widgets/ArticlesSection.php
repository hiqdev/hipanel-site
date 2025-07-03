<?php

namespace hipanel\site\widgets;

use Yii;
use yii\base\Widget;

class ArticlesSection extends Widget
{
    public function run(): string
    {
        $module = Yii::$app->getModule('articles');
        if ($module === null) {
            return "";
        }

        return $this->render('ArticlesSectionView', [
            'dataProvider' => $module->findList()->getDataProvider(),
        ]);
    }
}