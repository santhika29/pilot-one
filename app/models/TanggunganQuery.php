<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Tanggungan]].
 *
 * @see Tanggungan
 */
class TanggunganQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Tanggungan[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Tanggungan|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
