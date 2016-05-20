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
            [['id'], 'required'],
            [['id', 'kurs1', 'kurs2', 'kurs3', 'kurs4', 'mag1', 'mag2', 'kurs_its4'], 'integer'],
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
            'group' => 'Group',
            'kurs1' => 'Kurs1',
            'kurs2' => 'Kurs2',
            'kurs3' => 'Kurs3',
            'kurs4' => 'Kurs4',
            'mag1' => 'Mag1',
            'mag2' => 'Mag2',
            'kurs_its4' => 'Kurs Its4',
        ];
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
