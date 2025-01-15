<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cause".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $description
 * @property string|null $target_amount
 * @property string|null $location
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property string|null $created_by
 * @property string|null $updated_by
 */
class Cause extends \yii\db\ActiveRecord
{
    public $imageFile;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cause';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg, webp'],
            [['title', 'target_amount', 'image', 'location', 'created_by', 'updated_by'], 'string', 'max' => 255],
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
            'target_amount' => 'Target Amount',
            'location' => 'Location',
            'status' => 'Status',
            'image' => 'Image (871 × 363 px)',
            'imageFile' => 'Image File (871 × 363 px)',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }
}
