<div class="form-group" id="add-tanggungan">
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
    'formName' => 'Tanggungan',
    'checkboxColumn' => false,
    'actionColumn' => false,
    'attributeDefaults' => [
        'type' => TabularForm::INPUT_TEXT,
    ],
    'attributes' => [
        'tanggungan_id' => ['type' => TabularForm::INPUT_HIDDEN],
        'KODE' => ['type' => TabularForm::INPUT_TEXT],
        'NIKKES' => ['type' => TabularForm::INPUT_TEXT],
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
        'NIK_PASANGAN' => ['type' => TabularForm::INPUT_TEXT],
        'TANGGAL_AKHIR_TANGGUNGAN' => ['type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\datecontrol\DateControl::classname(),
            'options' => [
                'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
                'saveFormat' => 'php:Y-m-d',
                'ajaxConversion' => true,
                'options' => [
                    'pluginOptions' => [
                        'placeholder' => 'Choose TANGGAL AKHIR TANGGUNGAN',
                        'autoclose' => true
                    ]
                ],
            ]
        ],
        'HUBUNGANKEL' => ['type' => TabularForm::INPUT_TEXT],
        'TPK' => ['type' => TabularForm::INPUT_TEXT],
        'AREA' => ['type' => TabularForm::INPUT_TEXT],
        'NO_BPJS' => ['type' => TabularForm::INPUT_TEXT],
        'del' => [
            'type' => 'raw',
            'label' => '',
            'value' => function($model, $key) {
                return
                    Html::hiddenInput('Children[' . $key . '][id]', (!empty($model['id'])) ? $model['id'] : "") .
                    Html::a('<i class="glyphicon glyphicon-trash"></i>', '#', ['title' =>  'Delete', 'onClick' => 'delRowTanggungan(' . $key . '); return false;', 'id' => 'tanggungan-del-btn']);
            },
        ],
    ],
    'gridSettings' => [
        'panel' => [
            'heading' => false,
            'type' => GridView::TYPE_DEFAULT,
            'before' => false,
            'footer' => false,
            'after' => Html::button('<i class="glyphicon glyphicon-plus"></i>' . 'Add Tanggungan', ['type' => 'button', 'class' => 'btn btn-success kv-batch-create', 'onClick' => 'addRowTanggungan()']),
        ]
    ]
]);
echo  "    </div>\n\n";
?>

