<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "home_page".
 *
 * @property int $id
 * @property string|null $main_banner
 * @property string|null $main_banner_title
 * @property string|null $main_banner_Sub_title
 * @property string|null $causes_title
 * @property string|null $causes_sub_title
 * @property string|null $causes_description
 * @property string|null $causes_count
 * @property string|null $events_title
 * @property string|null $events_description
 * @property string|null $events_count
 * @property string|null $help_title
 * @property string|null $help_description
 * @property string|null $video_link
 * @property string|null $contact_title
 * @property string|null $contact_image
 * @property string|null $description
 * @property string|null $target_amount
 * @property string|null $location
 * @property string|null $image
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property string|null $created_by
 * @property string|null $updated_by
 */
class HomePage extends \yii\db\ActiveRecord
{
    public $contactImage;
    public $mainBannerImage;
    public $backgroundImage;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'home_page';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at'], 'integer'],
            [['main_banner', 'main_banner_title', 'main_banner_sub_title', 'causes_title', 'causes_sub_title', 'causes_description', 'causes_count', 'events_title', 'events_description', 'events_count', 'help_title', 'help_description', 'video_link', 'contact_title', 'contact_image', 'created_by', 'updated_by'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'main_banner' => 'Main Banner',
            'main_banner_title' => 'Main Banner Title',
            'main_banner_sub_title' => 'Main Banner Sub Title',
            'causes_title' => 'Causes Title',
            'causes_sub_title' => 'Causes Sub Title',
            'causes_description' => 'Causes Description',
            'causes_count' => 'Causes Count',
            'events_title' => 'Events Title',
            'events_description' => 'Events Description',
            'events_count' => 'Events Count',
            'help_title' => 'Help Title',
            'help_description' => 'Help Description',
            'video_link' => 'Video Link',
            'contact_title' => 'Contact Title',
            'contact_image' => 'Contact Image',
            'description' => 'Description',
            'target_amount' => 'Target Amount',
            'location' => 'Location',
            'image' => 'Image',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }
}
