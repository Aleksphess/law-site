<?php

namespace app\models;

use app\components\ImgBehavior;
use Yii;

/**
 * This is the model class for table "pages".
 *
 * @property int $id
 * @property string $name
 * @property string $alias
 * @property string $text
 * @property int $created_at
 */
class Page extends \yii\db\ActiveRecord
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
        return 'pages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text'], 'string'],
            [['created_at'], 'integer'],
            [['name', 'alias'], 'string', 'max' => 255],
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
            'alias' => 'Alias',
            'text' => 'Text',
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
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $alias
     * @return Page
     */
    public static function findByAlias(string $alias): Page
    {
        return self::find()->where(['alias' => $alias])->limit(1)->one();
    }


}
