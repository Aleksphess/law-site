<?php

namespace app\models;


use app\components\ImgBehavior;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $name
 * @property string $text
 * @property string $annotate
 * @property string $alias
 * @property int $created_at
 */
class News extends \yii\db\ActiveRecord
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
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text'], 'string'],
            [['created_at'], 'integer'],
            [['name', 'annotate', 'alias'], 'string', 'max' => 255],
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
            'text' => 'Text',
            'annotate' => 'Annotate',
            'alias' => 'Alias',
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
     * @return string
     */
    public function getAnnotate(): string
    {
        return $this->annotate;
    }

    /**
     * @return string
     */
    public function getAlias(): string
    {
        return $this->alias;
    }


}
