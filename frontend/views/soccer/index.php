<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\jui\DatePicker;
use frontend\models\Team;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\SoccerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Soccers';
$this->params['breadcrumbs'][] = $this->title;

$script = <<< JS
setInterval(function(){
    $.pjax.reload('#fresh', {timeout : false});
}, 3000);
JS;
$this->registerJs($script);
?>
<div class="soccer-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Soccer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(['id' => 'fresh']); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
