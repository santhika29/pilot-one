<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\RekapBiaya */

$this->title = $model->rekap_biaya_id;
$this->params['breadcrumbs'][] = ['label' => 'Rekap Biaya', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rekap-biaya-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Rekap Biaya'.' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">
            
            <?= Html::a('Update', ['update', 'id' => $model->rekap_biaya_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->rekap_biaya_id], [
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
        'rekap_biaya_id',
        'Kode_Mitra',
        'NIK',
        'Nama',
        'Loker',
        'Band',
        'Nikkes',
        'Nama_Pasien',
        'Dokter',
        'Tgl_Masuk',
        'Tgl_Keluar',
        'ICDX',
        'Kode_Biaya',
        'Jasa_Dokter',
        'KB_KIA',
        'Jasa_Dokter_Gigi',
        'Jasa_Dokter_Spe',
        'UGD',
        'Tindakan_Medis',
        'Obat_Bhn_Obat',
        'Alkes',
        'Pem_Penunjang',
        'Kamar',
        'Kamar_Operasi',
        'Ruang_Perwtn_Khusus',
        'Kacamata_dan_Alat_Rehab',
        'Biaya_Adm_Lainnya',
        'PPH',
        'Kunj_UMUM',
        'Kunj_GIGI',
        'Kunj_KBKIA',
        'MATKES',
        'CS',
        'Total',
        'bulan_tagihan',
        'tahun_tagihan',
        'dx_group',
        'top_six',
        'kota_rawat',
        'sakit',
        'status',
        'bulan_rawat',
        'tahun_rawat',
        'kode_rawat',
        'kunjungan',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]);
?>
    </div>
</div>
