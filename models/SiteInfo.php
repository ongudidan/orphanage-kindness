<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "site_info".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $address
 * @property string|null $mission
 * @property string|null $email
 * @property string|null $logo
 * @property string|null $favicon
 * @property string|null $phone
 * @property string|null $instagram
 * @property string|null $facebook
 * @property string|null $twitter
 * @property string|null $footer_text
 * @property string|null $description
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property string|null $created_by
 * @property string|null $updated_by
 */
class SiteInfo extends \yii\db\ActiveRecord
{
    public $logoFile;
    public $faviconFile;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'site_info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['created_at', 'updated_at'], 'integer'],
            [['title', 'address', 'mission', 'email', 'logo', 'favicon', 'phone', 'instagram', 'facebook', 'twitter', 'footer_text', 'created_by', 'updated_by'], 'string', 'max' => 255],
            [['logoFile', 'faviconFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg, webp'],

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
            'address' => 'Address',
            'mission' => 'Mission',
            'email' => 'Email',
            'logo' => 'Logo',
            'favicon' => 'Favicon',
            'phone' => 'Phone',
            'instagram' => 'Instagram',
            'facebook' => 'Facebook',
            'twitter' => 'Twitter',
            'footer_text' => 'Footer Text',
            'description' => 'Description',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }
}
