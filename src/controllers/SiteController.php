<?php

namespace hipanel\site\controllers;

use hipanel\modules\domain\cart\DomainRegistrationProduct;
use hipanel\modules\server\helpers\ServerHelper;
use hipanel\modules\server\cart\Tariff;
use hiqdev\yii2\cart\actions\AddToCartAction;
use hisite\actions\RenderAction;
use hipanel\models\User;
use hipanel\modules\server\cart\ServerOrderProduct;
use Yii;
use yii\authclient\AuthAction;
use yii\authclient\ClientInterface;

class SiteController extends \hisite\controllers\SiteController
{
    public function actions()
    {
        return array_merge(parent::actions(), [
            'auth' => [
                'class' => AuthAction::class,
                'successCallback' => [$this, 'onAuthSuccess'],
            ],
            'index' => [
                'class' => RenderAction::class,
            ],
            'vds' => [
                'class' => RenderAction::class,
                'data' => function () {
                    $xenPackages = ServerHelper::getAvailablePackages(Tariff::TYPE_SVDS);
                    $openvzPackages = ServerHelper::getAvailablePackages(Tariff::TYPE_OVDS);

                    return [
                        'xenPackages' => $xenPackages,
                        'openvzPackages' => $openvzPackages,
                    ];
                }
            ],
            'terms-and-conditions' => [
                'class' => RenderAction::class,
            ],
            'add-to-cart-registration' => [
                'class' => AddToCartAction::class,
                'productClass' => DomainRegistrationProduct::class,
            ],
            'add-to-cart' => [
                'class' => AddToCartAction::class,
                'productClass' => ServerOrderProduct::class
            ]
        ]);
    }

    public function onAuthSuccess(ClientInterface $client)
    {
        $attributes = $client->getUserAttributes();
        $user = new User();
        foreach ($user->attributes() as $k) {
            if (isset($attributes[$k])) {
                $user->{$k} = $attributes[$k];
            }
        }
        $user->save();
        Yii::$app->user->login($user, 3600 * 24 * 30);
    }

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goBack();
        }

        return $this->redirect(['/site/auth', 'authclient' => 'hiam']);
    }

    public function actionLogout()
    {
        $back = Yii::$app->request->getHostInfo();
        $url = Yii::$app->authClientCollection->getClient()->buildUrl('site/logout', compact('back'));
        Yii::$app->user->logout();

        return Yii::$app->response->redirect($url);
    }
}
