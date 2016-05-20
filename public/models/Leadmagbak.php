<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "leadmagbak".
 *
 * @property integer $id
 * @property string $leader
 * @property integer $kit11
 * @property integer $kit21
 * @property integer $p4243
 */
class Leadmagbak extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'leadmagbak';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'leader'], 'required'],
            [['id', 'kit11', 'kit21', 'p4243'], 'integer'],
            [['leader'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'leader' => 'Руководитель',
            'kit11' => 'КИТИС 11',
            'kit21' => 'КИТИС 21',
            'p4243' => 'П-41, 42',
        ];
    }

    /**
     * @inheritdoc
     * @return LeadmagbakQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new LeadmagbakQuery(get_called_class());
    }
}
