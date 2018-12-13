<?php

/* @var $this yii\web\View */
/* @var $searchModel app\models\RekapBiayaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

use yii\helpers\Html;
use kartik\export\ExportMenu;
use kartik\grid\GridView;

$this->title = 'Rekap Biaya';
$this->params['breadcrumbs'][] = $this->title;
$search = "$('.search-button').click(function(){
	$('.search-form').toggle(1000);
	return false;
});";
$this->registerJs($search);
?>
<div class="rekap-biaya-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Rekap Biaya', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Advance Search', '#', ['class' => 'btn btn-info search-button']) ?>
    </p>
    <div class="search-form" style="display:none">
        <?=  $this->render('_search', ['model' => $searchModel]); ?>
    </div>
    <?php 
    $gridColumn = [
        ['class' => 'yii\grid\SerialColumn'],
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
        [
            'class' => 'yii\grid\ActionColumn',
        ],
    ]; 
    ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => $gridColumn,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-rekap-biaya']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span>  ' . Html::encode($this->title),
        ],
        'export' => false,
        // your toolbar can include the additional full export menu
        'toolbar' => [
            '{export}',
            ExportMenu::widget([
                'dataProvider' => $dataProvider,
                'columns' => $gridColumn,
                'target' => ExportMenu::TARGET_BLANK,
                'fontAwesome' => true,
                'dropdownOptions' => [
                    'label' => 'Full',
                    'class' => 'btn btn-default',
                    'itemsBefore' => [
                        '<li class="dropdown-header">Export All Data</li>',
                    ],
                ],
                'exportConfig' => [
                    ExportMenu::FORMAT_PDF => false
                ]
            ]) ,
        ],
    ]); ?>

</div>
