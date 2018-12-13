<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tanggungan */
/* @var $form yii\widgets\ActiveForm */

\mootensai\components\JsBlock::widget(['viewFile' => '_script', 'pos'=> \yii\web\View::POS_END, 
    'viewParams' => [
        'class' => 'Peserta', 
        'relID' => 'peserta', 
        'value' => \yii\helpers\Json::encode($model->pesertas),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
?>

<div class="tanggungan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'tanggungan_id')->textInput(['placeholder' => 'Tanggungan']) ?>

    <?= $form->field($model, 'KODE')->textInput(['placeholder' => 'KODE']) ?>

    <?= $form->field($model, 'NIKKES')->textInput(['maxlength' => true, 'placeholder' => 'NIKKES']) ?>

    <?= $form->field($model, 'NIK_KK')->textInput(['maxlength' => true, 'placeholder' => 'NIK KK']) ?>

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

    <?php
    $forms = [
        [
            'label' => '<i class="glyphicon glyphicon-book"></i> ' . Html::encode('Peserta'),
            'content' => $this->render('_formPeserta', [
                'row' => \yii\helpers\ArrayHelper::toArray($model->pesertas),
            ]),
        ],
    ];
    echo kartik\tabs\TabsX::widget([
        'items' => $forms,
        'position' => kartik\tabs\TabsX::POS_ABOVE,
        'encodeLabels' => false,
        'pluginOptions' => [
            'bordered' => true,
            'sideways' => true,
            'enableCache' => false,
        ],
    ]);
    ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
