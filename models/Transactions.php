<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "transactions".
 *
 * @property int $id
 * @property string $transaction_id
 * @property string|null $invoice_id
 * @property string|null $state
 * @property string|null $provider
 * @property float|null $charges
 * @property float|null $net_amount
 * @property string|null $currency
 * @property float|null $value
 * @property string|null $account
 * @property string|null $api_ref
 * @property string|null $mpesa_reference
 * @property string|null $host
 * @property string|null $bin_country
 * @property string|null $card_type
 * @property int|null $retry_count
 * @property string|null $failed_reason
 * @property string|null $failed_code
 * @property string|null $failed_code_link
 * @property string|null $customer_id
 * @property string|null $phone_number
 * @property string|null $email
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $country
 * @property string|null $zipcode
 * @property string|null $payment_link
 * @property string|null $customer_comment
 * @property string|null $refundable
 * @property string|null $response_created_at
 * @property string|null $response_updated_at
 * @property string $created_at
 */
class Transactions extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transactions';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['transaction_id'], 'required'],
            [['charges', 'net_amount', 'value'], 'number'],
            [['retry_count'], 'integer'],
            [['response_created_at', 'response_updated_at', 'created_at'], 'safe'],
            [['transaction_id', 'invoice_id', 'state', 'provider', 'currency', 'account', 'api_ref', 'mpesa_reference', 'host', 'bin_country', 'card_type', 'failed_reason', 'failed_code', 'failed_code_link', 'customer_id', 'phone_number', 'email', 'first_name', 'last_name', 'country', 'zipcode', 'payment_link', 'customer_comment', 'refundable'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'transaction_id' => 'Transaction ID',
            'invoice_id' => 'Invoice ID',
            'state' => 'State',
            'provider' => 'Provider',
            'charges' => 'Charges',
            'net_amount' => 'Net Amount',
            'currency' => 'Currency',
            'value' => 'Value',
            'account' => 'Account',
            'api_ref' => 'Api Ref',
            'mpesa_reference' => 'Mpesa Reference',
            'host' => 'Host',
            'bin_country' => 'Bin Country',
            'card_type' => 'Card Type',
            'retry_count' => 'Retry Count',
            'failed_reason' => 'Failed Reason',
            'failed_code' => 'Failed Code',
            'failed_code_link' => 'Failed Code Link',
            'customer_id' => 'Customer ID',
            'phone_number' => 'Phone Number',
            'email' => 'Email',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'country' => 'Country',
            'zipcode' => 'Zipcode',
            'payment_link' => 'Payment Link',
            'customer_comment' => 'Customer Comment',
            'refundable' => 'Refundable',
            'response_created_at' => 'Response Created At',
            'response_updated_at' => 'Response Updated At',
            'created_at' => 'Created At',
        ];
    }
}
