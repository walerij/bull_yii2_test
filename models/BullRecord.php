<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bull".
 *
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property string $info
 * @property string $price
 */
class BullRecord extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bull';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id'], 'integer'],
            [['title', 'info', 'price'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'title' => 'Title',
            'info' => 'Info',
            'price' => 'Price',
        ];
    }
}
