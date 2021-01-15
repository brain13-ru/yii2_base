<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "posts".
 *
 * @property int $id
 * @property string $title
 * @property string|null $description
 * @property int|null $type 1-Статья, 2-Новость, 3-Страница
 * @property string $content
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property int $active
 * @property string $image
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'posts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'content', 'active', 'image'], 'required'],
            [['type', 'active'], 'integer'],
            [['content'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['title'], 'string', 'max' => 255],
            [['description', 'image'], 'string', 'max' => 1000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'type' => 'Type',
            'content' => 'Content',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'active' => 'Active',
            'image' => 'Image',
        ];
    }
}
