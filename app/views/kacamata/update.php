<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RekapBiaya */

$this->title = 'Update Rekap Biaya: ' . ' ' . $model->rekap_biaya_id;
$this->params['breadcrumbs'][] = ['label' => 'Rekap Biaya', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->rekap_biaya_id, 'url' => ['view', 'id' => $model->rekap_biaya_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rekap-biaya-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
