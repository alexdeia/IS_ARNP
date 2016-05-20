<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Leadmagbak]].
 *
 * @see Leadmagbak
 */
class LeadmagbakQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Leadmagbak[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Leadmagbak|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
