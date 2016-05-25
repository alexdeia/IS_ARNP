<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "teachers".
 *
 * @property integer $id
 * @property string $FIO
 * @property double $classes_subject
 * @property double $lead_practice
 * @property integer $lead_krb
 * @property integer $lead_magist
 * @property integer $ped_practices
 * @property double $job_gak
 * @property integer $jobs_zav_kaf
 * @property integer $lead_aspir
 *
 * @property Discipline[] $disciplines
 */


class Teachers extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'teachers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'FIO'], 'required'],
            [['id', 'lead_krb', 'lead_magist', 'ped_practices', 'jobs_zav_kaf', 'lead_aspir'], 'integer'],
            [['classes_subject', 'lead_practice', 'job_gak'], 'number'],
            [['FIO'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'FIO' => 'ФИО',
            'classes_subject' => 'Занятия по дисциплинам',
            'lead_practice' => 'Рук-во практикой',
            'lead_krb' => 'Рук-во КРБ',
            'lead_magist' => 'Рук-во маг.диссертацией',
            'ped_practices' => 'Пед. практика',
            'job_gak' => 'Работа ГАК, защита',
            'jobs_zav_kaf' => 'Работа по заданию зав.каф.',
            'lead_aspir' => 'Рук-во аспирантами',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDisciplines()
    {
        return $this->hasMany(Discipline::className(), ['teacher_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return TeachersQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TeachersQuery(get_called_class());
    }
}
