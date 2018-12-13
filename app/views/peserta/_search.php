<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PesertaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-peserta-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'peserta_id')->textInput(['placeholder' => 'Peserta']) ?>

    <?= $form->field($model, 'NIK')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Tanggungan::find()->orderBy('NIK_KK')->asArray()->all(), 'NIK_KK', 'tanggungan_id'),
        'options' => ['placeholder' => 'Choose Tanggungan'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'NAMA')->textInput(['maxlength' => true, 'placeholder' => 'NAMA']) ?>

    <?= $form->field($model, 'TGL_LAHIR')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose TGL LAHIR',
                'autoclose' => true
            ]
        ],
    ]); ?>

    <?= $form->field($model, 'ALAMAT_RUMAH')->textInput(['maxlength' => true, 'placeholder' => 'ALAMAT RUMAH']) ?>

    <?php /* echo $form->field($model, 'KOTA_RUMAH')->textInput(['maxlength' => true, 'placeholder' => 'KOTA RUMAH']) */ ?>

    <?php /* echo $form->field($model, 'TGL_PENSIUN')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose TGL PENSIUN',
                'autoclose' => true
            ]
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'BAND_POSISI')->textInput(['maxlength' => true, 'placeholder' => 'BAND POSISI']) */ ?>

    <?php /* echo $form->field($model, 'KLAS_POSISI')->textInput(['maxlength' => true, 'placeholder' => 'KLAS POSISI']) */ ?>

    <?php /* echo $form->field($model, 'vDIVISI')->textInput(['maxlength' => true, 'placeholder' => 'VDIVISI']) */ ?>

    <?php /* echo $form->field($model, 'LOKASI_KERJA')->textInput(['maxlength' => true, 'placeholder' => 'LOKASI KERJA']) */ ?>

    <?php /* echo $form->field($model, 'PERSONALSUBAREA')->textInput(['maxlength' => true, 'placeholder' => 'PERSONALSUBAREA']) */ ?>

    <?php /* echo $form->field($model, 'YAKES_AREA')->textInput(['placeholder' => 'YAKES AREA']) */ ?>

    <?php /* echo $form->field($model, 'TGL_MENINGGAL')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose TGL MENINGGAL',
                'autoclose' => true
            ]
        ],
    ]); */ ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
