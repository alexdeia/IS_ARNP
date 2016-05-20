<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "otherdata".
 *
 * @property integer $id
 * @property integer $lead_aspir
 * @property integer $all_kaf
 * @property double $stavok
 */
class Otherdata extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'otherdata';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'lead_aspir', 'all_kaf'], 'integer'],
            [['stavok'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'lead_aspir' => 'Руководство аспирантами',
            'all_kaf' => 'Всего на кафедру',
            'stavok' => 'Ставок',
        ];
    }

    /**
     * @inheritdoc
     * @return OtherdataQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OtherdataQuery(get_called_class());
    }
}
