<?php

namespace hipanel\site\components;

use Yii;

class Connection extends \hipanel\components\Connection
{
    /**
     * {@inheritdoc}
     */
    public function getAuth()
    {
        if ($this->_disabledAuth) {
            return [];
        }

        $user  = Yii::$app->user;
        $identity = $user->identity;
        if ($identity === null) {
            return [];
        }

        $token = $identity->getAccessToken();
        if (!$token && $user->loginRequired() !== null) {
            Yii::$app->response->redirect('/site/logout');
            Yii::$app->end();
        }

        return ['access_token' => $token];
    }
}
