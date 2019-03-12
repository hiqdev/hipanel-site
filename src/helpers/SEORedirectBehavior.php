<?php

namespace hipanel\site\helpers;

use Yii;
use yii\base\Behavior;
use yii\web\Response;
use yii\web\UrlRule;

class SEORedirectBehavior extends Behavior
{
    /**
     * @var array
     */
    public $redirectMap = [];

    /**
     * @var int
     */
    public $statusCode = 302;

    public function events()
    {
        return [
            Response::EVENT_BEFORE_SEND => 'beforeSend'
        ];
    }

    public function beforeSend()
    {
        if (Yii::$app->response->statusCode === 404) {
            $pathInfo = Yii::$app->request->pathInfo;
            if (!empty($pathInfo)) {
                foreach ($this->redirectMap as $pattern => $redirect) {
                    $rule = (new UrlRule(['pattern' => $pattern, 'route' => $pathInfo]));
                    if (preg_match($rule->pattern, $pathInfo, $matches)) {
                        Yii::$app->response->redirect('/' . $this->redirectMap[$rule->name], $this->statusCode)->send();
                        Yii::$app->end();
                    }
                }
            }
        }
    }
}
