<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "callbacks".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $text
 * @property int $created_at
 */
class Callback extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'callbacks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text'], 'string'],
            [['name', 'email', 'phone'], 'string', 'max' => 255],
            [['email', 'phone'], 'required'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'text' => 'Text',
        ];
    }
}
