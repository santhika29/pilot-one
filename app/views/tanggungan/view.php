<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Tanggungan */

$this->title = $model->tanggungan_id;
$this->params['breadcrumbs'][] = ['label' => 'Tanggungan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tanggungan-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Tanggungan'.' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">
            
            <?= Html::a('Update', ['update', 'id' => $model->tanggungan_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->tanggungan_id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ])
            ?>
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
    <div class="row">
        <h4>Peserta<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnPeserta = [
        'peserta_id',
        'NIK',
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
        'model' => $model->nIKKK,
        'attributes' => $gridColumnPeserta    ]);
    ?>
</div>
