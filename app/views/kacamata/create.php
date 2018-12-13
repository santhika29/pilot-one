<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\RekapBiaya */

$this->title = 'Create Rekap Biaya';
$this->params['breadcrumbs'][] = ['label' => 'Rekap Biaya', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rekap-biaya-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
