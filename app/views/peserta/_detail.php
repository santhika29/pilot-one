<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Peserta */

?>
<div class="peserta-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= Html::encode($model->peserta_id) ?></h2>
        </div>
    </div>

    <div class="row">
<?php 
    $gridColumn = [
        'peserta_id',
        [
            'attribute' => 'nIK.NIK_KK',
            'label' => 'NIK',
        ],
        'NAMA',
        'TGL_LAHIR',
        'ALAMAT_RUMAH',
        'KOTA_RUMAH',
        'TGL_PENSIUN',
        'BAND_POSISI',
        'KLAS_POSISI',
        'vDIVISI',
        'LOKASI_KERJA',
        'PERSONALSUBAREA',
        'YAKES_AREA',
        'TGL_MENINGGAL',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]); 
?>
    </div>
</div>