<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Teachers]].
 *
 * @see Teachers
 */
class TeachersQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Teachers[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Teachers|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }

/*    public function getTeachers() {
        $teachers = Yii::$app->db->createCommand('SELECT * FROM teachers')
            ->queryAll();
        return $teachers;
    }*/
}
