<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use frontend\models\Team;

/* @var $this yii\web\View */
/* @var $model frontend\models\Soccer */
/* @var $form yii\widgets\ActiveForm */
$team = Team::find()->all();
$items = ArrayHelper::map($team,'id','name');
?>

<div class="soccer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'surname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sex')->dropdownList($model->getSex()) ?>

    <?= $form->field($model, 'birthday')->widget(
        DatePicker::classname(), [
            'pluginOptions' => [
                'format' => 'yyyy-mm-dd'
            ]
        ] ) 
    ?>

    <?= $form->field($model, 'team_id')->dropdownList($items) ?>

    <?= $form->field($model, 'country')->dropdownList($model->getCountry()) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
