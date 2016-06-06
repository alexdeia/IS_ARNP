<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\db;

/**
 * This is the model class for table "discipline".
 *
 * @property integer $id
 * @property string $name
 * @property integer $teacher_id
 * @property integer $lectures
 * @property integer $groups_sem
 * @property integer $hours_on_group_sem
 * @property integer $groups_lr
 * @property integer $hours_on_group_lr
 * @property integer $cons_ekz
 * @property integer $lead_krkp
 * @property integer $dz_ref
 *
 * @property Teachers $teacher
 */
class Discipline extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'discipline';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['teacher_id', 'lectures', 'groups_sem', 'hours_on_group_sem', 'groups_lr', 'hours_on_group_lr', 'cons_ekz', 'lead_krkp', 'dz_ref'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['teacher_id'], 'exist', 'skipOnError' => true, 'targetClass' => Teachers::className(), 'targetAttribute' => ['teacher_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Дисциплина',
            'teacher_id' => 'ID преподавателя',
            'lectures' => 'Лекции',
            'groups_sem' => 'Кол-во групп',
            'hours_on_group_sem' => 'Часов на 1 группу (СЕМ)',
            'groups_lr' => 'Кол-во групп',
            'hours_on_group_lr' => 'Часов на 1 группу (ЛР)',
            'cons_ekz' => 'Конс. экз.',
            'lead_krkp' => 'Рук-во КР+КП',
            'dz_ref' => 'ДЗ, реф-ты',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeacher()
    {
        return $this->hasOne(Teachers::className(), ['id' => 'teacher_id']);
    }

    public function getStudents()
    {
        return $this->hasMany(Discipline::className(), ['id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return DisciplineQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DisciplineQuery(get_called_class());
    }

/*    public function Seminars()
    {
        $db = new db\Connection();
        $seminars = $db->createCommand('SELECT groups_sem FROM discipline')
                        ->queryColumn();
        return $seminars;
    }*/
}
