<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property string $news_name
 * @property string $image
 * @property string $short_description
 * @property string $full_text
 * @property integer $views
 * @property string $add_date
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['news_name', 'image', 'short_description', 'full_text', 'views', 'add_date'], 'required'],
            [['full_text'], 'string'],
            [['views'], 'integer'],
            [['add_date'], 'safe'],
            [['news_name'], 'string', 'max' => 50],
            [['image'], 'string', 'max' => 255],
            [['short_description'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'news_name' => 'Название',
            'image' => 'Изображение',
            'short_description' => 'Краткое описание',
            'full_text' => 'Полный текст',
            'views' => 'Views',
            'add_date' => 'Add Date',
        ];
    }


}
