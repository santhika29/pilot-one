<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tanggungan */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="tanggungan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'tanggungan_id')->textInput(['placeholder' => 'Tanggungan']) ?>

    <?= $form->field($model, 'KODE')->textInput(['placeholder' => 'KODE']) ?>

    <?= $form->field($model, 'NIKKES')->textInput(['maxlength' => true, 'placeholder' => 'NIKKES']) ?>

    <?= $form->field($model, 'NIK_KK')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Peserta::find()->orderBy('NIK')->asArray()->all(), 'NIK', 'peserta_id'),
        'options' => ['placeholder' => 'Choose Peserta'],
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

    <?= $form->field($model, 'NIK_PASANGAN')->textInput(['placeholder' => 'NIK PASANGAN']) ?>

    <?= $form->field($model, 'TANGGAL_AKHIR_TANGGUNGAN')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose TANGGAL AKHIR TANGGUNGAN',
                'autoclose' => true
            ]
        ],
    ]); ?>

    <?= $form->field($model, 'HUBUNGANKEL')->textInput(['maxlength' => true, 'placeholder' => 'HUBUNGANKEL']) ?>

    <?= $form->field($model, 'TPK')->textInput(['maxlength' => true, 'placeholder' => 'TPK']) ?>

    <?= $form->field($model, 'AREA')->textInput(['placeholder' => 'AREA']) ?>

    <?= $form->field($model, 'NO_BPJS')->textInput(['maxlength' => true, 'placeholder' => 'NO BPJS']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
