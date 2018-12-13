<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RekapBiayaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-rekap-biaya-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <!-- <?= $form->field($model, 'rekap_biaya_id')->textInput(['placeholder' => 'Rekap Biaya']) ?> -->

    <!-- <?= $form->field($model, 'Kode_Mitra')->textInput(['maxlength' => true, 'placeholder' => 'Kode Mitra']) ?> -->

    <?= $form->field($model, 'NIK')->textInput(['placeholder' => 'NIK']) ?>

    <?= $form->field($model, 'Nama')->textInput(['maxlength' => true, 'placeholder' => 'Nama']) ?>

    <!-- <?= $form->field($model, 'Loker')->textInput(['maxlength' => true, 'placeholder' => 'Loker']) ?> -->

    <?php /* echo $form->field($model, 'Band')->textInput(['maxlength' => true, 'placeholder' => 'Band']) */ ?>

    <?= $form->field($model, 'Nikkes')->textInput(['maxlength' => true, 'placeholder' => 'Nikkes'])  ?>

    <?= $form->field($model, 'Nama_Pasien')->textInput(['maxlength' => true, 'placeholder' => 'Nama Pasien'])  ?>

    <?php /* echo $form->field($model, 'Dokter')->textInput(['placeholder' => 'Dokter']) */ ?>

    <?php /* echo $form->field($model, 'Tgl_Masuk')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tgl Masuk',
                'autoclose' => true
            ]
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'Tgl_Keluar')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tgl Keluar',
                'autoclose' => true
            ]
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'ICDX')->textInput(['maxlength' => true, 'placeholder' => 'ICDX']) */ ?>

    <?php /* echo $form->field($model, 'Kode_Biaya')->textInput(['placeholder' => 'Kode Biaya']) */ ?>

    <?php /* echo $form->field($model, 'Jasa_Dokter')->textInput(['placeholder' => 'Jasa Dokter']) */ ?>

    <?php /* echo $form->field($model, 'KB_KIA')->textInput(['placeholder' => 'KB_KIA']) */ ?>

    <?php /* echo $form->field($model, 'Jasa_Dokter_Gigi')->textInput(['placeholder' => 'Jasa Dokter Gigi']) */ ?>

    <?php /* echo $form->field($model, 'Jasa_Dokter_Spe')->textInput(['placeholder' => 'Jasa Dokter Spe']) */ ?>

    <?php /* echo $form->field($model, 'UGD')->textInput(['placeholder' => 'UGD']) */ ?>

    <?php /* echo $form->field($model, 'Tindakan_Medis')->textInput(['placeholder' => 'Tindakan Medis']) */ ?>

    <?php /* echo $form->field($model, 'Obat_Bhn_Obat')->textInput(['placeholder' => 'Obat Bhn Obat']) */ ?>

    <?php /* echo $form->field($model, 'Alkes')->textInput(['placeholder' => 'Alkes']) */ ?>

    <?php /* echo $form->field($model, 'Pem_Penunjang')->textInput(['placeholder' => 'Pem Penunjang']) */ ?>

    <?php /* echo $form->field($model, 'Kamar')->textInput(['placeholder' => 'Kamar']) */ ?>

    <?php /* echo $form->field($model, 'Kamar_Operasi')->textInput(['placeholder' => 'Kamar Operasi']) */ ?>

    <?php /* echo $form->field($model, 'Ruang_Perwtn_Khusus')->textInput(['placeholder' => 'Ruang Perwtn Khusus']) */ ?>

    <?php /* echo $form->field($model, 'Kacamata_dan_Alat_Rehab')->textInput(['placeholder' => 'Kacamata Dan Alat Rehab']) */ ?>

    <?php /* echo $form->field($model, 'Biaya_Adm_Lainnya')->textInput(['placeholder' => 'Biaya Adm Lainnya']) */ ?>

    <?php /* echo $form->field($model, 'PPH')->textInput(['placeholder' => 'PPH']) */ ?>

    <?php /* echo $form->field($model, 'Kunj_UMUM')->textInput(['placeholder' => 'Kunj UMUM']) */ ?>

    <?php /* echo $form->field($model, 'Kunj_GIGI')->textInput(['placeholder' => 'Kunj GIGI']) */ ?>

    <?php /* echo $form->field($model, 'Kunj_KBKIA')->textInput(['placeholder' => 'Kunj KBKIA']) */ ?>

    <?php /* echo $form->field($model, 'MATKES')->textInput(['placeholder' => 'MATKES']) */ ?>

    <?php /* echo $form->field($model, 'CS')->textInput(['placeholder' => 'CS']) */ ?>

    <?php /* echo $form->field($model, 'Total')->textInput(['placeholder' => 'Total']) */ ?>

    <?php /* echo $form->field($model, 'bulan_tagihan')->textInput(['maxlength' => true, 'placeholder' => 'Bulan Tagihan']) */ ?>

    <?php /* echo $form->field($model, 'tahun_tagihan')->textInput(['placeholder' => 'Tahun Tagihan']) */ ?>

    <?php /* echo $form->field($model, 'dx_group')->textInput(['maxlength' => true, 'placeholder' => 'Dx Group']) */ ?>

    <?php /* echo $form->field($model, 'top_six')->textInput(['maxlength' => true, 'placeholder' => 'Top Six']) */ ?>

    <?php /* echo $form->field($model, 'kota_rawat')->textInput(['maxlength' => true, 'placeholder' => 'Kota Rawat']) */ ?>

    <?php /* echo $form->field($model, 'sakit')->textInput(['maxlength' => true, 'placeholder' => 'Sakit']) */ ?>

    <?php /* echo $form->field($model, 'status')->textInput(['maxlength' => true, 'placeholder' => 'Status']) */ ?>

    <?php /* echo $form->field($model, 'bulan_rawat')->textInput(['placeholder' => 'Bulan Rawat']) */ ?>

    <?php /* echo $form->field($model, 'tahun_rawat')->textInput(['placeholder' => 'Tahun Rawat']) */ ?>

    <?php /* echo $form->field($model, 'kode_rawat')->textInput(['maxlength' => true, 'placeholder' => 'Kode Rawat']) */ ?>

    <?php /* echo $form->field($model, 'kunjungan')->textInput(['placeholder' => 'Kunjungan']) */ ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
