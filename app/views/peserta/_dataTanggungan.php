<?php
use kartik\grid\GridView;
use yii\data\ArrayDataProvider;

    $dataProvider = new ArrayDataProvider([
        'allModels' => $model->tanggungans,
        'key' => 'tanggungan_id'
    ]);
    $gridColumns = [
        ['class' => 'yii\grid\SerialColumn'],
        'tanggungan_id',
        'KODE',
        'NIKKES',
        'NAMA',
        'TGL_LAHIR',
        'NIK_PASANGAN',
        'TANGGAL_AKHIR_TANGGUNGAN',
        'HUBUNGANKEL',
        'TPK',
        'AREA',
        'NO_BPJS',
        [
            'class' => 'yii\grid\ActionColumn',
            'controller' => 'tanggungan'
        ],
    ];
    
    echo GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => $gridColumns,
        'containerOptions' => ['style' => 'overflow: auto'],
        'pjax' => true,
        'beforeHeader' => [
            [
                'options' => ['class' => 'skip-export']
            ]
        ],
        'export' => [
            'fontAwesome' => true
        ],
        'bordered' => true,
        'striped' => true,
        'condensed' => true,
        'responsive' => true,
        'hover' => true,
        'showPageSummary' => false,
        'persistResize' => false,
    ]);
