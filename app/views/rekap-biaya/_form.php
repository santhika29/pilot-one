<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RekapBiaya */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="rekap-biaya-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'rekap_biaya_id')->textInput(['placeholder' => 'Rekap Biaya']) ?>

    <?= $form->field($model, 'Kode_Mitra')->textInput(['maxlength' => true, 'placeholder' => 'Kode Mitra']) ?>

    <?= $form->field($model, 'NIK')->textInput(['placeholder' => 'NIK']) ?>

    <?= $form->field($model, 'Nama')->textInput(['maxlength' => true, 'placeholder' => 'Nama']) ?>

    <?= $form->field($model, 'Loker')->textInput(['maxlength' => true, 'placeholder' => 'Loker']) ?>

    <?= $form->field($model, 'Band')->textInput(['maxlength' => true, 'placeholder' => 'Band']) ?>

    <?= $form->field($model, 'Nikkes')->textInput(['maxlength' => true, 'placeholder' => 'Nikkes']) ?>

    <?= $form->field($model, 'Nama_Pasien')->textInput(['maxlength' => true, 'placeholder' => 'Nama Pasien']) ?>

    <?= $form->field($model, 'Dokter')->textInput(['placeholder' => 'Dokter']) ?>

    <?= $form->field($model, 'Tgl_Masuk')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tgl Masuk',
                'autoclose' => true
            ]
        ],
    ]); ?>

    <?= $form->field($model, 'Tgl_Keluar')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tgl Keluar',
                'autoclose' => true
            ]
        ],
    ]); ?>

    <?= $form->field($model, 'ICDX')->textInput(['maxlength' => true, 'placeholder' => 'ICDX']) ?>

    <?= $form->field($model, 'Kode_Biaya')->textInput(['placeholder' => 'Kode Biaya']) ?>

    <?= $form->field($model, 'Jasa_Dokter')->textInput(['placeholder' => 'Jasa Dokter']) ?>

    <?= $form->field($model, 'KB_KIA')->textInput(['placeholder' => 'KB_KIA']) ?>

    <?= $form->field($model, 'Jasa_Dokter_Gigi')->textInput(['placeholder' => 'Jasa Dokter Gigi']) ?>

    <?= $form->field($model, 'Jasa_Dokter_Spe')->textInput(['placeholder' => 'Jasa Dokter Spe']) ?>

    <?= $form->field($model, 'UGD')->textInput(['placeholder' => 'UGD']) ?>

    <?= $form->field($model, 'Tindakan_Medis')->textInput(['placeholder' => 'Tindakan Medis']) ?>

    <?= $form->field($model, 'Obat_Bhn_Obat')->textInput(['placeholder' => 'Obat Bhn Obat']) ?>

    <?= $form->field($model, 'Alkes')->textInput(['placeholder' => 'Alkes']) ?>

    <?= $form->field($model, 'Pem_Penunjang')->textInput(['placeholder' => 'Pem Penunjang']) ?>

    <?= $form->field($model, 'Kamar')->textInput(['placeholder' => 'Kamar']) ?>

    <?= $form->field($model, 'Kamar_Operasi')->textInput(['placeholder' => 'Kamar Operasi']) ?>

    <?= $form->field($model, 'Ruang_Perwtn_Khusus')->textInput(['placeholder' => 'Ruang Perwtn Khusus']) ?>

    <?= $form->field($model, 'Kacamata_dan_Alat_Rehab')->textInput(['placeholder' => 'Kacamata Dan Alat Rehab']) ?>

    <?= $form->field($model, 'Biaya_Adm_Lainnya')->textInput(['placeholder' => 'Biaya Adm Lainnya']) ?>

    <?= $form->field($model, 'PPH')->textInput(['placeholder' => 'PPH']) ?>

    <?= $form->field($model, 'Kunj_UMUM')->textInput(['placeholder' => 'Kunj UMUM']) ?>

    <?= $form->field($model, 'Kunj_GIGI')->textInput(['placeholder' => 'Kunj GIGI']) ?>

    <?= $form->field($model, 'Kunj_KBKIA')->textInput(['placeholder' => 'Kunj KBKIA']) ?>

    <?= $form->field($model, 'MATKES')->textInput(['placeholder' => 'MATKES']) ?>

    <?= $form->field($model, 'CS')->textInput(['placeholder' => 'CS']) ?>

    <?= $form->field($model, 'Total')->textInput(['placeholder' => 'Total']) ?>

    <?= $form->field($model, 'bulan_tagihan')->textInput(['maxlength' => true, 'placeholder' => 'Bulan Tagihan']) ?>

    <?= $form->field($model, 'tahun_tagihan')->textInput(['placeholder' => 'Tahun Tagihan']) ?>

    <?= $form->field($model, 'dx_group')->textInput(['maxlength' => true, 'placeholder' => 'Dx Group']) ?>

    <?= $form->field($model, 'top_six')->textInput(['maxlength' => true, 'placeholder' => 'Top Six']) ?>

    <?= $form->field($model, 'kota_rawat')->textInput(['maxlength' => true, 'placeholder' => 'Kota Rawat']) ?>

    <?= $form->field($model, 'sakit')->textInput(['maxlength' => true, 'placeholder' => 'Sakit']) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true, 'placeholder' => 'Status']) ?>

    <?= $form->field($model, 'bulan_rawat')->textInput(['placeholder' => 'Bulan Rawat']) ?>

    <?= $form->field($model, 'tahun_rawat')->textInput(['placeholder' => 'Tahun Rawat']) ?>

    <?= $form->field($model, 'kode_rawat')->textInput(['maxlength' => true, 'placeholder' => 'Kode Rawat']) ?>

    <?= $form->field($model, 'kunjungan')->textInput(['placeholder' => 'Kunjungan']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
