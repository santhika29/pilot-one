<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Peserta */

$this->title = $model->peserta_id;
$this->params['breadcrumbs'][] = ['label' => 'Peserta', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peserta-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Peserta'.' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">
            
            <?= Html::a('Update', ['update', 'id' => $model->peserta_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->peserta_id], [
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
        'peserta_id',
        [
            'attribute' => 'nIK.tanggungan_id',
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
    <div class="row">
        <h4>Tanggungan<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnTanggungan = [
        'tanggungan_id',
        'KODE',
        'NIKKES',
        'NIK_KK',
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
        'model' => $model->nIK,
        'attributes' => $gridColumnTanggungan    ]);
    ?>
</div>
