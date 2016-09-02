<?php

namespace hipanel\site\controllers;

use hisite\actions\RenderAction;

class SiteController extends \hisite\controllers\SiteController
{
    public function actions()
    {
        return [
            'index' => [
                'class' => RenderAction::class,
            ],
            'vds' => [
                'class' => RenderAction::class,
                'data' => function ($action) {
                    $xenPackages = ServerHelper::getAvailablePackages(Tariff::TYPE_SVDS);
                    $openvzPackages = ServerHelper::getAvailablePackages(Tariff::TYPE_OVDS);
                    $tariffTypes = [
                        Tariff::TYPE_SVDS => 'XenSSD',
                        Tariff::TYPE_OVDS => 'OpenVZ',
                    ];

                    return [
                        'xenPackages' => $xenPackages,
                        'openvzPackages' => $openvzPackages,
                        'tariffTypes' => $tariffTypes,
                    ];
                }
            ],
            'domains' => [
                'class' => RenderAction::class,
            ],
            'transfer' => [
                'class' => RenderAction::class,
            ],
            'dns' => [
                'class' => RenderAction::class,
            ],
            'help' => [
                'class' => RenderAction::class,
            ],
            'faq' => [
                'class' => RenderAction::class,
            ],
            'rules' => [
                'class' => RenderAction::class,
            ],
        ];
    }
}
