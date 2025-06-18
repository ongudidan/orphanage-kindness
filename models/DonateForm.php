<?php

namespace app\models;

use yii\base\Model;

class DonateForm extends Model
{
    public $phone_number;
    public $amount;

    public function rules()
    {
        return [
            [['phone_number', 'amount'], 'required'],
            ['phone_number', 'match', 'pattern' => '/^2547\d{8}$/', 'message' => 'Enter valid Safaricom number (e.g. 254712345678)'],
            ['amount', 'number', 'min' => 1],
        ];
    }
}
