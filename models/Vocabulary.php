<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vocabulary".
 *
 * @property int $id
 * @property string $alias
 * @property string $value
 * @property int $created_at
 */
class Vocabulary extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'vocabulary';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at'], 'integer'],
            [['alias', 'value'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'alias' => 'Alias',
            'value' => 'Value',
            'created_at' => 'Created At',
        ];
    }
}
