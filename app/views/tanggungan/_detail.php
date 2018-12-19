<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Tanggungan */

?>
<div class="tanggungan-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= Html::encode($model->tanggungan_id) ?></h2>
        </div>
    </div>

    <div class="row">
<?php 
    $gridColumn = [
        'tanggungan_id',
        'KODE',
        'NIKKES',
        [
            'attribute' => 'nIKKK.peserta_id',
            'label' => 'NIK KK',
        ],
        'NAMA',
        'TGL_LAHIR',
        'NIK_PASANGAN',
        'TANGGAL_AKHIR_TANGGUNGAN',
        'HUBUNGANKEL',
        'TPK',
        'AREA',
        'NO_BPJS',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]); 
?>
    </div>
</div>