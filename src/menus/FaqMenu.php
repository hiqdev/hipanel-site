<?php

/*
 * Selling site for HiPanel
 *
 * @link      http://hipanel.com/
 * @package   hipanel-site
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016, HiQDev (http://hiqdev.com/)
 */

namespace hipanel\site\menus;

use hipanel\helpers\FileHelper;
use Yii;

class FaqMenu extends \hiqdev\menumanager\Menu
{
    public $path;

    public function items()
    {
        $items = $this->crawl($this->path);
        $data =  [
            'dns' => [
                'label' => 'DNS Server setup',
                'items' => [
                    'ns' => [
                        'label' => 'NS Server installation',
                        'items' => [
                            'installing' => [
                                'label' => 'Installing third-party NS-servers',
                                'content' => 'If you have an NS server that is issued by the hosting provide ...',
                            ],
                            'evo' => [
                                'label' => 'evo.ru-tld.ru NS-server installation',
                                'content' => 'To configure a DNS in the evo.ru-tld.ru panel',
                            ],
                            'creating' => [
                                'label' => 'Creating subsidiary NS-servers',
                                'items' => [
                                    'a1' => [
                                        'label' => 'a1',
                                        'content' => 'a1 content',

                                    ],
                                    'a2' => [
                                        'label' => 'a2',
                                        'content' => 'a2 content',
                                    ],
                                ]
                            ],
                        ]
                    ],
                    'setting' => [
                        'label' => 'Setting a DNS in evo.ru-tld.ru panel',
                    ],
                    'errors' => [
                        'label' => 'Errors and Problems',
                    ]
                ],

            ],
            'transfer' => [
                'label' => 'Transfer',
                'items' => [
                    'transferring' => [
                        'label' => 'Transferring domain to other user',
                        'content' => 'The process of transferring domains between users within one registrar is called Push'
                    ],
                    'o2-transferring' => [
                        'label' => 'Transferring domain to other registrar',
                        'content' => 'If you want to transfer domains to other registrars,',
                    ],
                ],

            ],
            'hosting' => [
                'label' => 'Hosting',
                'items' => [],
            ],
        ];

        return $items;
    }

    private function crawl($path)
    {
        $out = [];
//        $view = Yii::$app->view;
//        foreach ($this->find($path) as $file) {
//            if (is_dir(str_replace('.php', '', $file))) {
//
//            } else {
//
//            }
//            $content = $view->renderFile($file);
//            $label = $view->title;
//        }

        return $out;
    }

    private function find($path)
    {
        return ''; // FileHelper::findFiles(Yii::getAlias($path), ['recursive' => false]);
    }
}
