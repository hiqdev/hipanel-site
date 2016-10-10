<?php

use hipanel\site\widgets\Faq;

$this->title = Yii::t('hipanel/site/faq', 'FAQ');

?>

<?= Faq::widget([
    'items' => [
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
    ],
]) ?>

