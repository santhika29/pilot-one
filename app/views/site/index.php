<?php

/* @var $this yii\web\View */
use dosamigos\chartjs\ChartJs;
use yiister\gentelella\widgets\Panel;
$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">
    


        <!-- <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div> -->
<div class="row">
    <div class="col-md-4 col-xs-12">
        <?php
        Panel::begin(
            [
                'header' => 'Header menu',
                'icon' => 'cog',
                'headerMenu' => [
                    [
                        'label' => 'The first item',
                        'url' => '#',
                    ],
                    [
                        'label' => 'The second item',
                        'url' => '#',
                    ],
                ],
            ]
        )
        ?>
        <p><?= ChartJs::widget([
    'type' => 'line',
    'options' => [
        'height' => 400,
        'width' => 400
    ],
    'data' => [
        'labels' => ["January", "February", "March", "April", "May", "June", "July"],
        'datasets' => [
            [
                'label' => "My First dataset",
                'backgroundColor' => "rgba(179,181,198,0.2)",
                'borderColor' => "rgba(179,181,198,1)",
                'pointBackgroundColor' => "rgba(179,181,198,1)",
                'pointBorderColor' => "#fff",
                'pointHoverBackgroundColor' => "#fff",
                'pointHoverBorderColor' => "rgba(179,181,198,1)",
                'data' => [65, 59, 90, 81, 56, 55, 40]
            ],
            [
                'label' => "My Second dataset",
                'backgroundColor' => "rgba(255,99,132,0.2)",
                'borderColor' => "rgba(255,99,132,1)",
                'pointBackgroundColor' => "rgba(255,99,132,1)",
                'pointBorderColor' => "#fff",
                'pointHoverBackgroundColor' => "#fff",
                'pointHoverBorderColor' => "rgba(255,99,132,1)",
                'data' => [28, 48, 40, 19, 96, 27, 100]
            ]
        ]
    ]
]);
?></p>
        <?php Panel::end() ?>
    </div>
    <div class="col-md-4 col-xs-12">
        <?php
        Panel::begin(
            [
                'header' => 'All available buttons',
                'icon' => 'cog',
                'removable' => true,
                'collapsable' => true,
                'headerMenu' => [
                    [
                        'label' => 'The first item',
                        'url' => '#',
                    ],
                    [
                        'label' => 'The second item',
                        'url' => '#',
                    ],
                ],
            ]
        )
        ?>
        <p><?=
        ChartJs::widget([
            'type' => 'pie',
            'id' => 'structurePie',
            'options' => [
                'height' => 200,
                'width' => 400,
            ],
            'data' => [
                'radius' =>  "90%",
                'labels' => ['Label 1', 'Label 2', 'Label 3'], // Your labels
                'datasets' => [
                    [
                        'data' => ['35.6', '17.5', '46.9'], // Your dataset
                        'label' => '',
                        'backgroundColor' => [
                                '#ADC3FF',
                                '#FF9A9A',
                            'rgba(190, 124, 145, 0.8)'
                        ],
                        'borderColor' =>  [
                                '#fff',
                                '#fff',
                                '#fff'
                        ],
                        'borderWidth' => 1,
                        'hoverBorderColor'=>["#999","#999","#999"],                
                    ]
                ]
            ],
            'clientOptions' => [
                'legend' => [
                    'display' => false,
                    'position' => 'bottom',
                    'labels' => [
                        'fontSize' => 14,
                        'fontColor' => "#425062",
                    ]
                ],
                'tooltips' => [
                    'enabled' => true,
                    'intersect' => true
                ],
                'hover' => [
                    'mode' => false
                ],
                'maintainAspectRatio' => false,
        
            ],
            
        ]);
        ?></p>
        <?php Panel::end() ?>
    </div>
    <div class="col-md-4 col-xs-12">
        <?php
        Panel::begin(
            [
                'header' => 'Custom buttons',
                'icon' => 'cog',
                'tools' => [
                    [
                        'encode' => false,
                        'items' => [],
                        'label' => new \rmrevin\yii\fontawesome\component\Icon('bar-chart'),
                    ],
                    [
                        'encode' => false,
                        'items' => [
                            [
                                'label' => 'The first item',
                                'url' => '#',
                            ],
                            [
                                'label' => 'The second item',
                                'url' => '#',
                            ],
                        ],
                        'label' => new \rmrevin\yii\fontawesome\component\Icon('list'),
                    ],
                ],
            ]
        )
        ?>
        <p>Panel with custom header buttons.</p>
        <?php Panel::end() ?>
    </div>
</div>
    </div>
</div>
