<?php

namespace frontend\components;

// use yii\base\Widget;
use yii\widgets\InputWidget;
use yii\helpers\ArrayHelper;
use frontend\models\Team;
use yii\widgets\Pjax;

class ISWidget extends InputWidget
{
	public $value = "";

    public function init()
    {
        parent::init();
    }

	public function run()
	{
		parent::run();

		$teams = Team::find()->all();

		return $this->render('inputselect', [
			'data' => ArrayHelper::map($teams,'id','name'),
			'value' => $this->value
		]);
		// return Html::encode($this->message);
	}

}