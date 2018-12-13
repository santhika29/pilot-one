<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[RekapBiaya]].
 *
 * @see RekapBiaya
 */
class RekapBiayaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return RekapBiaya[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return RekapBiaya|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
