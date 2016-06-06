<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "students".
 *
 * @property integer $id
 * @property string $group
 * @property integer $kurs1
 * @property integer $kurs2
 * @property integer $kurs3
 * @property integer $kurs4
 * @property integer $mag1
 * @property integer $mag2
 * @property integer $kurs_its4
 */
class Students extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'students';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kurs1', 'kurs2', 'kurs3', 'kurs4', 'mag1', 'mag2', 'kurs_its4'], 'integer'],
            [['group'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'group' => 'Группа',
            'kurs1' => '1 курс',
            'kurs2' => '2 курс',
            'kurs3' => '3 курс',
            'kurs4' => '4 курс',
            'mag1' => '1 маг',
            'mag2' => '2 маг',
            'kurs_its4' => '4 курс ИТС',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDiscipline()
    {
        return $this->hasOne(Students::className(), ['id' => 'kurs1']);
    }

    /**
     * @inheritdoc
     * @return StudentsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new StudentsQuery(get_called_class());
    }
}
