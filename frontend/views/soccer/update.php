<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Soccer */

$this->title = 'Update Soccer: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Soccers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="soccer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
