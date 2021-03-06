<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use frontend\models\Team;

/* @var $this yii\web\View */
/* @var $model frontend\models\Soccer */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Soccers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="soccer-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'surname',
            'sex',
            'birthday',
            [
                'attribute' => 'team_id',
                'value' => function($searchModel) { 
                    return Team::find()->where(['id' => $searchModel->team_id])->one()['name'];
                },
            ],
            'country',
        ],
    ]) ?>

</div>
