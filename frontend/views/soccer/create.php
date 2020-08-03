<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Soccer */

$this->title = 'Create Soccer';
$this->params['breadcrumbs'][] = ['label' => 'Soccers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="soccer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
