<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "volunteer".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $skills
 * @property string $availability
 * @property string|null $created_at
 */
class Volunteer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'volunteer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'phone', 'skills', 'availability'], 'required'],
            [['created_at'], 'safe'],
            [['name', 'email', 'skills', 'availability'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 15],
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
            'email' => 'Email',
            'phone' => 'Phone',
            'skills' => 'Skills',
            'availability' => 'Availability',
            'created_at' => 'Created At',
        ];
    }
}
