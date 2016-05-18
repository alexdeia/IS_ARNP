<?php

namespace app\models;

use Yii;

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
class Teachers extends \yii\db\ActiveRecord
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
            'FIO' => 'Fio',
            'classes_subject' => 'Classes Subject',
            'lead_practice' => 'Lead Practice',
            'lead_krb' => 'Lead Krb',
            'lead_magist' => 'Lead Magist',
            'ped_practices' => 'Ped Practices',
            'job_gak' => 'Job Gak',
            'jobs_zav_kaf' => 'Jobs Zav Kaf',
            'lead_aspir' => 'Lead Aspir',
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
