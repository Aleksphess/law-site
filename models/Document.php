<?php

namespace app\models;

use app\components\ImgBehavior;
use Yii;

/**
 * This is the model class for table "documents".
 *
 * @property int $id
 * @property string $name
 * @property string $file
 * @property int $created_at
 */
class Document extends \yii\db\ActiveRecord
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
        return 'documents';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at'], 'integer'],
            [['name', 'file'], 'string', 'max' => 255],
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
            'file' => 'File',
            'created_at' => 'Created At',
        ];
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getFile(): string
    {
        return $this->file;
    }


}
