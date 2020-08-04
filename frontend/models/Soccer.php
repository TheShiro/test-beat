<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "socer".
 *
 * @property int $id
 * @property string $name
 */
class Soccer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'soccer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'surname', 'sex', 'birthday', 'team_id', 'country'], 'required'],
            [['name', 'surname'], 'string', 'max' => 50],
            [['sex', 'country'], 'integer'],
            [['birthday'], 'string'],
            [['team_id'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'surname' => 'Фамилия',
            'sex' => 'Пол',
            'birthday' => 'День рождения',
            'team_id' => 'Команда',
            'country' => 'Страна',
        ];
    }

    public function getSex()
    {
        return [
            1 => 'Мужской',
            2 => 'Женский'
        ];
    }

    public function getCountry()
    {
        return [
            1 => 'Россия',
            2 => 'США',
            3 => 'Италия',
        ];
    }
}
