<div class="form-group" id="add-peserta">
<?php
use kartik\grid\GridView;
use kartik\builder\TabularForm;
use yii\data\ArrayDataProvider;
use yii\helpers\Html;
use yii\widgets\Pjax;

$dataProvider = new ArrayDataProvider([
    'allModels' => $row,
    'pagination' => [
        'pageSize' => -1
    ]
]);
echo TabularForm::widget([
    'dataProvider' => $dataProvider,
    'formName' => 'Peserta',
    'checkboxColumn' => false,
    'actionColumn' => false,
    'attributeDefaults' => [
        'type' => TabularForm::INPUT_TEXT,
    ],
    'attributes' => [
        'peserta_id' => ['type' => TabularForm::INPUT_HIDDEN],
        'NAMA' => ['type' => TabularForm::INPUT_TEXT],
        'TGL_LAHIR' => ['type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\datecontrol\DateControl::classname(),
            'options' => [
                'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
                'saveFormat' => 'php:Y-m-d',
                'ajaxConversion' => true,
                'options' => [
                    'pluginOptions' => [
                        'placeholder' => 'Choose TGL LAHIR',
                        'autoclose' => true
                    ]
                ],
            ]
        ],
        'ALAMAT_RUMAH' => ['type' => TabularForm::INPUT_TEXT],
        'KOTA_RUMAH' => ['type' => TabularForm::INPUT_TEXT],
        'TGL_PENSIUN' => ['type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\datecontrol\DateControl::classname(),
            'options' => [
                'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
                'saveFormat' => 'php:Y-m-d',
                'ajaxConversion' => true,
                'options' => [
                    'pluginOptions' => [
                        'placeholder' => 'Choose TGL PENSIUN',
                        'autoclose' => true
                    ]
                ],
            ]
        ],
        'BAND_POSISI' => ['type' => TabularForm::INPUT_TEXT],
        'KLAS_POSISI' => ['type' => TabularForm::INPUT_TEXT],
        'vDIVISI' => ['type' => TabularForm::INPUT_TEXT],
        'LOKASI_KERJA' => ['type' => TabularForm::INPUT_TEXT],
        'PERSONALSUBAREA' => ['type' => TabularForm::INPUT_TEXT],
        'YAKES_AREA' => ['type' => TabularForm::INPUT_TEXT],
        'TGL_MENINGGAL' => ['type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\datecontrol\DateControl::classname(),
            'options' => [
                'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
                'saveFormat' => 'php:Y-m-d',
                'ajaxConversion' => true,
                'options' => [
                    'pluginOptions' => [
                        'placeholder' => 'Choose TGL MENINGGAL',
                        'autoclose' => true
                    ]
                ],
            ]
        ],
        'del' => [
            'type' => 'raw',
            'label' => '',
            'value' => function($model, $key) {
                return
                    Html::hiddenInput('Children[' . $key . '][id]', (!empty($model['id'])) ? $model['id'] : "") .
                    Html::a('<i class="glyphicon glyphicon-trash"></i>', '#', ['title' =>  'Delete', 'onClick' => 'delRowPeserta(' . $key . '); return false;', 'id' => 'peserta-del-btn']);
            },
        ],
    ],
    'gridSettings' => [
        'panel' => [
            'heading' => false,
            'type' => GridView::TYPE_DEFAULT,
            'before' => false,
            'footer' => false,
            'after' => Html::button('<i class="glyphicon glyphicon-plus"></i>' . 'Add Peserta', ['type' => 'button', 'class' => 'btn btn-success kv-batch-create', 'onClick' => 'addRowPeserta()']),
        ]
    ]
]);
echo  "    </div>\n\n";
?>

