<?php

namespace app\models;
use yii\db\ActiveRecord;

/**
 * This is the ActiveQuery class for [[Discipline]].
 *
 * @see Discipline
 */
class DisciplineQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Discipline[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Discipline|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
    
}