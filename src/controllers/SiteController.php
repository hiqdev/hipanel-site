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
