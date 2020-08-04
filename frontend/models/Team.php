<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "team".
 *
 * @property int $id
 * @property string $name
 */
class Team extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'team';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    public static function getOrCreate($name)
    {
        $team = self::find()->where(['name' => $name])->one();
        if($team->id) {
            return $team->id;
        } else {
            $team = new self();
            $team->name = $name;
            $team->save();
            return $team->id;
        }
    }
}
