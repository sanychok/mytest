<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sector1".
 *
 * @property integer $id
 * @property integer $ряд
 * @property integer $місце
 * @property integer $active
 */
class Sector1 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sector1';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ряд', 'місце', 'active', 'user_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ряд' => 'ряд',
            'місце' => 'місце',
            'active' => 'Active',
        ];
    }
}
