<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "event_page".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $banner_image
 * @property string|null $count
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property string|null $created_by
 * @property string|null $updated_by
 */
class EventPage extends \yii\db\ActiveRecord
{
    public $imageFile;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'event_page';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['banner_image', 'count'], 'string'],
            [['created_at', 'updated_at'], 'integer'],
            [['title', 'created_by', 'updated_by'], 'string', 'max' => 255],
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg, webp'],
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
            'banner_image' => 'Banner Image',
            'count' => 'Count',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }
}
