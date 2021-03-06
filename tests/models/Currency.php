<?php
namespace pastuhov\ymlcatalog\Test\models;

use pastuhov\ymlcatalog\CurrencyInterface;
use yii\db\ActiveRecord;

/**
 * @inheritdoc
 */
class Currency extends ActiveRecord implements CurrencyInterface
{
    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->attributes['name'];
    }

    /**
     * @inheritdoc
     */
    public function getRate()
    {
        return $this->attributes['rate'];
    }

    /**
     * @inheritdoc
     */
    public function getPlus()
    {
        return $this->attributes['plus'];
    }

    /**
     * @inheritdoc
     */
    public static function findYml()
    {
        $query = self::find();
        $query->orderBy('id');

        return $query;
    }
}
