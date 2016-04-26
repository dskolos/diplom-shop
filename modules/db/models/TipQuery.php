<?php

namespace app\modules\db\models;

/**
 * This is the ActiveQuery class for [[Tip]].
 *
 * @see Tip
 */
class TipQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Tip[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Tip|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
