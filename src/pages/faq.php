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
                            'view' => '',
                        ],
                        'evo' => [
                            'label' => 'evo.ru-tld.ru NS-server installation',
                            'view' => '',
                        ],
                        'creating' => [
                            'label' => 'Creating subsidiary NS-servers',
                            'view' => '',
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

        ],
        'hosting' => [
            'label' => 'Hosting',

        ],
    ],
]) ?>

<div class="faq-tabs-white">
    <div class="row">
        <div class="col-sm-12">
            <!-- TABS -->
            <div class="tabbable tabs-top-horizontal">
                <div class="tab-content">

                    <!-- DNS TAB -->
                    <div class="tab-pane fade in active" id="dns">
                        <div id="accordion" class="panel-group spacing-40">
                            <!-- QUESTION -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <i class="indicator fa fa-plus-square-o pull-left"></i>
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                            <?= Yii::t('hisite', 'NS Server installation') ?>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse">
                                    <div class="panel-body">

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="tabbable tabs-top-horizontal">
                                                    <div class="tab-content">
                                                        <div id="subAccording1" class="panel-group">
                                                            <!-- QUESTION -->
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <h4 class="panel-title"><i
                                                                            class="indicator fa fa-plus-square-o pull-left"></i><a
                                                                            data-toggle="collapse"
                                                                            data-parent="#subAccording1"
                                                                            href="#collapse112">Installing third-party
                                                                            NS-servers</a></h4>
                                                                </div>
                                                                <div id="collapse112" class="panel-collapse collapse">
                                                                    <div class="panel-body">
                                                                        <p>Hack, John Lennon, efficient small-scale
                                                                            farmers planned giving social responsibility
                                                                            life-expectancy. Transformative, deep
                                                                            engagement Andrew Carnegie, carbon emissions
                                                                            reductions meaningful cooperation.
                                                                            Forward-thinking fundraise stakeholders,
                                                                            time of extraordinary change human-centered
                                                                            design humanitarian aid micro-finance.
                                                                            Community health workers nutrition rural
                                                                            development . </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- QUESTION -->
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <h4 class="panel-title"><i
                                                                            class="indicator fa fa-plus-square-o pull-left"></i><a
                                                                            data-toggle="collapse"
                                                                            data-parent="#subAccording1"
                                                                            href="#collapse113">ahnames.com NS-server
                                                                            installation</a></h4>
                                                                </div>
                                                                <div id="collapse113" class="panel-collapse collapse">
                                                                    <div class="panel-body">
                                                                        <p>Hack, John Lennon, efficient small-scale
                                                                            farmers planned giving social responsibility
                                                                            life-expectancy. Transformative, deep
                                                                            engagement Andrew Carnegie, carbon emissions
                                                                            reductions meaningful cooperation.
                                                                            Forward-thinking fundraise stakeholders,
                                                                            time of extraordinary change human-centered
                                                                            design humanitarian aid micro-finance.
                                                                            Community health workers nutrition rural
                                                                            development . </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- QUESTION -->
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <h4 class="panel-title"><i
                                                                            class="indicator fa fa-plus-square-o pull-left"></i><a
                                                                            data-toggle="collapse"
                                                                            data-parent="#subAccording1"
                                                                            href="#collapse114">Creating subsidiary
                                                                            NS-servers</a></h4>
                                                                </div>
                                                                <div id="collapse114" class="panel-collapse collapse">
                                                                    <div class="panel-body">
                                                                        <p>Hack, John Lennon, efficient small-scale
                                                                            farmers planned giving social responsibility
                                                                            life-expectancy. Transformative, deep
                                                                            engagement Andrew Carnegie, carbon emissions
                                                                            reductions meaningful cooperation.
                                                                            Forward-thinking fundraise stakeholders,
                                                                            time of extraordinary change human-centered
                                                                            design humanitarian aid micro-finance.
                                                                            Community health workers nutrition rural
                                                                            development . </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- END OF QUESTION -->
                            <!-- QUESTION -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><i class="indicator fa fa-plus-square-o pull-left"></i><a
                                            data-toggle="collapse" data-parent="#accordion" href="#collapse2">HOW TO
                                            TRANSFER EMAIL ACCOUNTS AND MESSAGES BETWEEN CPANEL SERVERS?</a></h4>
                                </div>
                                <div id="collapse2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Hack, John Lennon, efficient small-scale farmers planned giving social
                                            responsibility life-expectancy. Transformative, deep engagement Andrew
                                            Carnegie, carbon emissions reductions meaningful cooperation.
                                            Forward-thinking fundraise stakeholders, time of extraordinary change
                                            human-centered design humanitarian aid micro-finance. Community health
                                            workers nutrition rural development . </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END OF QUESTION -->
                            <!-- QUESTION -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><i class="indicator fa fa-plus-square-o pull-left"></i><a
                                            data-toggle="collapse" data-parent="#accordion" href="#collapse3">PARKED VS
                                            ADDON DOMAINS</a></h4>
                                </div>
                                <div id="collapse3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Medecins du Monde results. Vulnerable population, Bloomberg social movement
                                            plumpy'nut mobilize, our ambitions strengthen democracy disrupt global
                                            network.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- END OF QUESTION -->
                            <!-- QUESTION -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><i class="indicator fa fa-plus-square-o pull-left"></i><a
                                            data-toggle="collapse" data-parent="#accordion" href="#collapse4">HOW TO
                                            OPTIMIZE A MYSQL DATABASE</a></h4>
                                </div>
                                <div id="collapse4" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>System political frontline. New hisite/faqroaches foster, UNHCR, medical The
                                            Elders Bill and Melinda Gates peaceful connect initiative. Human-centered
                                            design, vaccine celebrate; support, social analysis pride microloans. Equity
                                            honesty implementation local innovation, solutions progressive raise
                                            awareness visionary. Martin Luther King Jr., involvement maximize respect
                                            interconnectivity. Volunteer advocate; convener vulnerable population
                                            UNICEF. Philanthropy; accelerate progress smart.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- END OF QUESTION -->
                            <!-- QUESTION -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><i class="indicator fa fa-plus-square-o pull-left"></i><a
                                            data-toggle="collapse" data-parent="#accordion" href="#collapse5">HOW TO
                                            CHANGE THE LANGUAGE FOR CPANEL?</a></h4>
                                </div>
                                <div id="collapse5" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Economic divide social responsibility, natural resources collaborative
                                            consumption Medecins du Monde momentum expanding community ownership theory
                                            of social change. Grantees, combat poverty plumpy'nut engage leverage
                                            informal economies. Angelina Jolie liberal, cooperation, honor public sector
                                            measures safety. Kony 2012 growth recognition protect best practices. Global
                                            health; resourceful working .</p>
                                    </div>
                                </div>
                            </div>
                            <!-- END OF QUESTION -->
                        </div>
                    </div>
                    <!-- END OF DNS TAB -->

                    <!-- TRANSFER TAB -->
                    <div class="tab-pane fade" id="transfer">
                        <div id="accordion2" class="panel-group spacing-40">
                            <!-- QUESTION -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><i class="indicator fa fa-plus-square-o pull-left"></i><a
                                            data-toggle="collapse" data-parent="#accordion2" href="#collapse6">WHAT IS
                                            APACHE?</a></h4>
                                </div>
                                <div id="collapse6" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Corps, indicator donate Global South leverage. Institutions, The Elders,
                                            conflict resolution gun control developing. Experience in the field;
                                            shifting landscape; dedicated local solutions rural Nelson Mandela
                                            Martin. </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END OF QUESTION -->
                            <!-- QUESTION -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><i class="indicator fa fa-plus-square-o pull-left"></i><a
                                            data-toggle="collapse" data-parent="#accordion2" href="#collapse7">WHY AM I
                                            GETTING SERVER RESTART MESSAGES PERIODICALLY, WHEN I DID NOT RESTART THE
                                            SERVER?</a></h4>
                                </div>
                                <div id="collapse7" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Hack, John Lennon, efficient small-scale farmers planned giving social
                                            responsibility life-expectancy. Transformative, deep engagement Andrew
                                            Carnegie, carbon emissions reductions meaningful cooperation.
                                            Forward-thinking fundraise stakeholders, time of extraordinary change
                                            human-centered design humanitarian aid micro-finance. Community health
                                            workers nutrition rural development . </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END OF QUESTION -->
                            <!-- QUESTION -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><i class="indicator fa fa-plus-square-o pull-left"></i><a
                                            data-toggle="collapse" data-parent="#accordion2" href="#collapse8">WHY
                                            DOESN'T MOD_INFO LIST ANY DIRECTIVES?</a></h4>
                                </div>
                                <div id="collapse8" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Medecins du Monde results. Vulnerable population, Bloomberg social movement
                                            plumpy'nut mobilize, our ambitions strengthen democracy disrupt global
                                            network.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- END OF QUESTION -->
                            <!-- QUESTION -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><i class="indicator fa fa-plus-square-o pull-left"></i><a
                                            data-toggle="collapse" data-parent="#accordion2" href="#collapse9">HOW CAN I
                                            CHANGE THE INFORMATION THAT APACHE RETURNS ABOUT ITSELF IN THE HEADERS?</a>
                                    </h4>
                                </div>
                                <div id="collapse9" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>System political frontline. New hisite/faqroaches foster, UNHCR, medical The
                                            Elders Bill and Melinda Gates peaceful connect initiative. Human-centered
                                            design, vaccine celebrate; support, social analysis pride microloans. Equity
                                            honesty implementation local innovation, solutions progressive raise
                                            awareness visionary. Martin Luther King Jr., involvement maximize respect
                                            interconnectivity. Volunteer advocate; convener vulnerable population
                                            UNICEF. Philanthropy; accelerate progress smart.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- END OF QUESTION -->
                            <!-- QUESTION -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><i class="indicator fa fa-plus-square-o pull-left"></i><a
                                            data-toggle="collapse" data-parent="#accordion2" href="#collapse10">HOW DO I
                                            ENABLE SSI (PARSED HTML)?</a></h4>
                                </div>
                                <div id="collapse10" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Economic divide social responsibility, natural resources collaborative
                                            consumption Medecins du Monde momentum expanding community ownership theory
                                            of social change. Grantees, combat poverty plumpy'nut engage leverage
                                            informal economies. Angelina Jolie liberal, cooperation, honor public sector
                                            measures safety. Kony 2012 growth recognition protect best practices. Global
                                            health; resourceful working .</p>
                                    </div>
                                </div>
                            </div>
                            <!-- END OF QUESTION -->
                            <!-- QUESTION -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><i class="indicator fa fa-plus-square-o pull-left"></i><a
                                            data-toggle="collapse" data-parent="#accordion2" href="#collapse11">CAN I
                                            USE ACTIVE SERVER PAGES (ASP) WITH APACHE?</a></h4>
                                </div>
                                <div id="collapse11" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Economic divide social responsibility, natural resources collaborative
                                            consumption Medecins du Monde momentum expanding community ownership theory
                                            of social change. Grantees, combat poverty plumpy'nut engage leverage
                                            informal economies. Angelina Jolie liberal, cooperation, honor public sector
                                            measures safety. Kony 2012 growth recognition protect best practices. Global
                                            health; resourceful working .</p>
                                    </div>
                                </div>
                            </div>
                            <!-- END OF QUESTION -->
                        </div>
                    </div>
                    <!-- END OF transfer TAB -->

                    <!-- reseller TAB -->
                    <div class="tab-pane fade" id="reseller">
                        <div id="accordion3" class="panel-group spacing-40">
                            <!-- QUESTION -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><i class="indicator fa fa-plus-square-o pull-left"></i><a
                                            data-toggle="collapse" data-parent="#accordion3" href="#collapse12">WHAT IS
                                            DNS?</a></h4>
                                </div>
                                <div id="collapse12" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Corps, indicator donate Global South leverage. Institutions, The Elders,
                                            conflict resolution gun control developing. Experience in the field;
                                            shifting landscape; dedicated local solutions rural Nelson Mandela
                                            Martin. </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END OF QUESTION -->
                            <!-- QUESTION -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><i class="indicator fa fa-plus-square-o pull-left"></i><a
                                            data-toggle="collapse" data-parent="#accordion3" href="#collapse13">CAN I
                                            USE DNS TO HOST MY DOMAIN NAME OR WEBSITE?</a></h4>
                                </div>
                                <div id="collapse13" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Hack, John Lennon, efficient small-scale farmers planned giving social
                                            responsibility life-expectancy. Transformative, deep engagement Andrew
                                            Carnegie, carbon emissions reductions meaningful cooperation.
                                            Forward-thinking fundraise stakeholders, time of extraordinary change
                                            human-centered design humanitarian aid micro-finance. Community health
                                            workers nutrition rural development . </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END OF QUESTION -->
                            <!-- QUESTION -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><i class="indicator fa fa-plus-square-o pull-left"></i><a
                                            data-toggle="collapse" data-parent="#accordion3" href="#collapse14">WHERE
                                            ARE YOUR SERVERS CURRENTLY LOCATED?</a></h4>
                                </div>
                                <div id="collapse14" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Medecins du Monde results. Vulnerable population, Bloomberg social movement
                                            plumpy'nut mobilize, our ambitions strengthen democracy disrupt global
                                            network.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- END OF QUESTION -->
                            <!-- QUESTION -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><i class="indicator fa fa-plus-square-o pull-left"></i><a
                                            data-toggle="collapse" data-parent="#accordion3" href="#collapse15">HOW DOES
                                            DNS HANDLE LOOKUPS WHICH FAIL DNSSEC VALIDATION?</a></h4>
                                </div>
                                <div id="collapse15" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>System political frontline. New hisite/faqroaches foster, UNHCR, medical The
                                            Elders Bill and Melinda Gates peaceful connect initiative. Human-centered
                                            design, vaccine celebrate; support, social analysis pride microloans. Equity
                                            honesty implementation local innovation, solutions progressive raise
                                            awareness visionary. Martin Luther King Jr., involvement maximize respect
                                            interconnectivity. Volunteer advocate; convener vulnerable population
                                            UNICEF. Philanthropy; accelerate progress smart.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- END OF QUESTION -->
                            <!-- QUESTION -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><i class="indicator fa fa-plus-square-o pull-left"></i><a
                                            data-toggle="collapse" data-parent="#accordion3" href="#collapse16">WHAT IS
                                            A DOMAIN NAME?</a></h4>
                                </div>
                                <div id="collapse16" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Economic divide social responsibility, natural resources collaborative
                                            consumption Medecins du Monde momentum expanding community ownership theory
                                            of social change. Grantees, combat poverty plumpy'nut engage leverage
                                            informal economies. Angelina Jolie liberal, cooperation, honor public sector
                                            measures safety. Kony 2012 growth recognition protect best practices. Global
                                            health; resourceful working .</p>
                                    </div>
                                </div>
                            </div>
                            <!-- END OF QUESTION -->
                            <!-- QUESTION -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><i class="indicator fa fa-plus-square-o pull-left"></i><a
                                            data-toggle="collapse" data-parent="#accordion3" href="#collapse17">WHAT IS
                                            AN IP?</a></h4>
                                </div>
                                <div id="collapse17" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Economic divide social responsibility, natural resources collaborative
                                            consumption Medecins du Monde momentum expanding community ownership theory
                                            of social change. Grantees, combat poverty plumpy'nut engage leverage
                                            informal economies. Angelina Jolie liberal, cooperation, honor public sector
                                            measures safety. Kony 2012 growth recognition protect best practices. Global
                                            health; resourceful working .</p>
                                    </div>
                                </div>
                            </div>
                            <!-- END OF QUESTION -->
                            <!-- QUESTION -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><i class="indicator fa fa-plus-square-o pull-left"></i><a
                                            data-toggle="collapse" data-parent="#accordion3" href="#collapse18">HOW LONG
                                            DO DNS CHANGES TAKE TO PROPAGATE?</a></h4>
                                </div>
                                <div id="collapse18" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Economic divide social responsibility, natural resources collaborative
                                            consumption Medecins du Monde momentum expanding community ownership theory
                                            of social change. Grantees, combat poverty plumpy'nut engage leverage
                                            informal economies. Angelina Jolie liberal, cooperation, honor public sector
                                            measures safety. Kony 2012 growth recognition protect best practices. Global
                                            health; resourceful working .</p>
                                    </div>
                                </div>
                            </div>
                            <!-- END OF QUESTION -->
                            <!-- QUESTION -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><i class="indicator fa fa-plus-square-o pull-left"></i><a
                                            data-toggle="collapse" data-parent="#accordion3" href="#collapse19">WHAT IS
                                            THE WEBSITE’S IP ADDRESS?</a></h4>
                                </div>
                                <div id="collapse19" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Economic divide social responsibility, natural resources collaborative
                                            consumption Medecins du Monde momentum expanding community ownership theory
                                            of social change. Grantees, combat poverty plumpy'nut engage leverage
                                            informal economies. Angelina Jolie liberal, cooperation, honor public sector
                                            measures safety. Kony 2012 growth recognition protect best practices. Global
                                            health; resourceful working .</p>
                                    </div>
                                </div>
                            </div>
                            <!-- END OF QUESTION -->
                        </div>
                    </div>
                    <!-- END OF reseller TAB -->


                </div>
            </div>
            <!-- END OF TABS -->

        </div>
    </div>
</div>
<!-- END OF FAQ TABS -->
