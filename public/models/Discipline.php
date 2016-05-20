<?php

namespace app\models;

use Yii;

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
class Discipline extends \yii\db\ActiveRecord
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
            'name' => 'Name',
            'teacher_id' => 'Teacher ID',
            'lectures' => 'Lectures',
            'groups_sem' => 'Groups Sem',
            'hours_on_group_sem' => 'Hours On Group Sem',
            'groups_lr' => 'Groups Lr',
            'hours_on_group_lr' => 'Hours On Group Lr',
            'cons_ekz' => 'Cons Ekz',
            'lead_krkp' => 'Lead Krkp',
            'dz_ref' => 'Dz Ref',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeacher()
    {
        return $this->hasOne(Teachers::className(), ['id' => 'teacher_id']);
    }

    /**
     * @inheritdoc
     * @return DisciplineQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DisciplineQuery(get_called_class());
    }
}
