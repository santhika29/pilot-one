<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TanggunganSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-tanggungan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'tanggungan_id')->textInput(['placeholder' => 'Tanggungan']) ?>

    <?= $form->field($model, 'KODE')->textInput(['placeholder' => 'KODE']) ?>

    <?= $form->field($model, 'NIKKES')->textInput(['maxlength' => true, 'placeholder' => 'NIKKES']) ?>

    <?= $form->field($model, 'NIK_KK')->textInput(['maxlength' => true, 'placeholder' => 'NIK KK']) ?>

    <?= $form->field($model, 'NAMA')->textInput(['maxlength' => true, 'placeholder' => 'NAMA']) ?>

    <?php /* echo $form->field($model, 'TGL_LAHIR')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose TGL LAHIR',
                'autoclose' => true
            ]
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'NIK_PASANGAN')->textInput(['placeholder' => 'NIK PASANGAN']) */ ?>

    <?php /* echo $form->field($model, 'TANGGAL_AKHIR_TANGGUNGAN')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose TANGGAL AKHIR TANGGUNGAN',
                'autoclose' => true
            ]
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'HUBUNGANKEL')->textInput(['maxlength' => true, 'placeholder' => 'HUBUNGANKEL']) */ ?>

    <?php /* echo $form->field($model, 'TPK')->textInput(['maxlength' => true, 'placeholder' => 'TPK']) */ ?>

    <?php /* echo $form->field($model, 'AREA')->textInput(['placeholder' => 'AREA']) */ ?>

    <?php /* echo $form->field($model, 'NO_BPJS')->textInput(['maxlength' => true, 'placeholder' => 'NO BPJS']) */ ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
