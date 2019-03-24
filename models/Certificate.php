<?php

namespace app\models;

use app\components\ImgBehavior;

/**
 * This is the model class for table "certificates".
 *
 * @property int $id
 */
class Certificate extends \yii\db\ActiveRecord
{
    /**
     * @return array
     */
    public function behaviors(): array
    {
        return [
            'thumb' => [
                'class' => ImgBehavior::className()
            ],
        ];
    }


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'certificates';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
        ];
    }
}
