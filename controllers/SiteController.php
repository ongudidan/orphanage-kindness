<?php

namespace app\controllers;

use app\models\Blog;
use app\models\Cause;
use Yii;
use yii\web\Controller;
use yii\web\Response;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\DonateForm as ModelsDonateForm;
use app\models\Event;
use app\models\EventPage;
use app\models\Transactions;
use IntaSend\IntaSendPHP\Checkout;
use IntaSend\IntaSendPHP\Collection;
//  use app\views\DonateForm;
use app\models\DonateForm;
use app\models\Volunteer;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        $behaviors = parent::behaviors();

        $behaviors['access'] = [
            'class' => \yii\filters\AccessControl::class,
            'only' => ['save-transaction', 'callback'],
            'rules' => [
                [
                    'actions' => ['save-transaction', 'callback'],
                    'allow' => true,
                    'roles' => ['?'], // public access
                ],
            ],
        ];

        return $behaviors;
    }


    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionBlog()
    {
        $model = Blog::find()->orderby(['id' => SORT_DESC])->all();
        return $this->render('blog', [
            'model' => $model,
        ]);
    }

    public function actionSingleBlog($id)
    {
        $model = Blog::findOne($id);
        return $this->render('single-blog', [
            'model' => $model,
        ]);
    }

    public function actionEvent()
    {
        $model = Event::find()->orderby(['id' => SORT_DESC])->all();
        $eventBanner = EventPage::find()->one();

        return $this->render('event', [
            'model' => $model,
            'eventBanner' => $eventBanner,
        ]);
    }

    public function actionSingleEvent($id)
    {
        $model = Event::findOne($id);
        $eventBanner = EventPage::find()->one();

        return $this->render('single-event', [
            'model' => $model,
            'eventBanner' => $eventBanner,
        ]);
    }


    public function actionCause()
    {
        $model = Cause::find()->orderby(['id' => SORT_DESC])->all();

        return $this->render('cause', [
            'model' => $model,
        ]);
    }

    public function actionSingleCause($id)
    {
        $model = Cause::findOne($id);
        return $this->render('single-cause', [
            'model' => $model,
        ]);
    }

    public function actionGallery()
    {
        return $this->render('gallery');
    }

    public function actionTeam()
    {
        return $this->render('team');
    }
    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionVolunteer()
    {
        $model = new Volunteer();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Application submitted successfully!');
                return $this->refresh();
            }
        }

        return $this->render('volunteer', [
            'model' => $model,
        ]);
    }



    public function actionDonate()
    {
        $model = new ModelsDonateForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // Trigger STK push here if you want
            Yii::$app->session->setFlash('success', 'Thank you for your donation!');
            return $this->refresh(); // Prevent form resubmission
        }

        return $this->render('donate', [
            'model' => $model,
        ]);
        // $model = new ModelsDonateForm();
        $credentials = [
            'token' => 'ISSecretKey_live_14993cca-ad7d-4bdc-b11b-4b3a6fa79b97',
            'publishable_key' => 'ISPubKey_live_5fab51c6-3e32-4c75-8e31-0cef81accf41'
        ];

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            try {
                $collection = new Collection();
                $collection->init($credentials);

                $response = $collection->mpesa_stk_push(
                    $model->amount,
                    $model->phone_number,
                    "KES",
                    "MPESA_STK_PUSH",
                    "",
                    "",
                    "donor@example.com"
                );

                // Save to DB
                $txn = new Transactions();
                $txn->transaction_id = $response->id ?? null;
                $txn->invoice_id = $response->invoice->invoice_id ?? null;
                $txn->state = $response->invoice->state ?? null;
                $txn->provider = $response->invoice->provider ?? null;
                $txn->charges = $response->invoice->charges ?? null;
                $txn->net_amount = $response->invoice->net_amount ?? null;
                $txn->currency = $response->invoice->currency ?? null;
                $txn->value = $response->invoice->value ?? null;
                $txn->account = $response->invoice->account ?? null;
                $txn->api_ref = $response->invoice->api_ref ?? null;
                $txn->mpesa_reference = $response->invoice->mpesa_reference ?? null;
                $txn->host = $response->invoice->host ?? null;
                $txn->bin_country = $response->invoice->card_info->bin_country ?? null;
                $txn->card_type = $response->invoice->card_info->card_type ?? null;
                $txn->retry_count = $response->invoice->retry_count ?? null;
                $txn->failed_reason = $response->invoice->failed_reason ?? null;
                $txn->failed_code = $response->invoice->failed_code ?? null;
                $txn->failed_code_link = $response->invoice->failed_code_link ?? null;
                $txn->response_created_at = isset($response->created_at) ? date('Y-m-d H:i:s', strtotime($response->created_at)) : null;
                $txn->response_updated_at = isset($response->updated_at) ? date('Y-m-d H:i:s', strtotime($response->updated_at)) : null;
                $txn->customer_id = $response->customer->customer_id ?? null;
                $txn->phone_number = $model->phone_number;
                $txn->email = $response->customer->email ?? null;
                $txn->refundable = isset($response->refundable)
                    ? (is_bool($response->refundable) ? ($response->refundable ? 'true' : 'false') : (string)$response->refundable)
                    : null;

                if ($txn->save()) {
                    Yii::$app->session->setFlash('success', 'STK Push sent to ' . $model->phone_number);
                } else {
                    Yii::$app->session->setFlash('error', 'Failed to save: ' . json_encode($txn->errors));
                }
            } catch (\Exception $e) {
                Yii::$app->session->setFlash('error', 'Error: ' . $e->getMessage());
            }

            return $this->refresh(); // show same form with flash
        }

        return $this->render('donate', ['model' => $model]);
    }


    // Method to check payment status
    protected function checkPaymentStatus($invoice_id)
    {
        // Define your credentials
        $credentials = [
            'token' => 'ISSecretKey_live_14993cca-ad7d-4bdc-b11b-4b3a6fa79b97',
            'publishable_key' =>  'ISPubKey_live_5fab51c6-3e32-4c75-8e31-0cef81accf41'
        ];

        $collection = new Collection();
        $collection->init($credentials);

        // Check the status using the invoice ID
        return $collection->status($invoice_id);
    }

    // public function actionInitiate()
    // {
    //     // Define your credentials
    //     $credentials = [
    //         'token' => 'ISSecretKey_live_13caa6af-39c2-420f-8c39-21883bd85e0a',
    //         'publishable_key' => 'ISPubKey_live_5fab51c6-3e32-4c75-8e31-0cef81accf41'
    //     ];

    //     $amount = 10;
    //     $phone_number = "254768540720";

    //     $collection = new Collection();
    //     $collection->init($credentials);

    //     // Initiating the STK push
    //     $response = $collection->mpesa_stk_push($amount, $phone_number);

    //     // Get Invoice ID
    //     $invoice_id = $response->invoice->invoice_id;

    //     // Check
    //     $statusResponse = $collection->status($invoice_id);

    //     // Get update on status
    //     $status = json_encode($statusResponse);

    //     return $status;
    // }



    public function actionInitiate()
    {
        $model = new DonateForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $credentials = Yii::$app->params['intasend'];
            $collection = new Collection();
            $collection->init([
                'token' => 'ISSecretKey_live_14993cca-ad7d-4bdc-b11b-4b3a6fa79b97',
                'publishable_key' =>  'ISPubKey_live_5fab51c6-3e32-4c75-8e31-0cef81accf41'
            ]);

            try {
                $response = $collection->mpesa_stk_push(
                    $model->amount,
                    $model->phone_number
                );

                // Save transaction to DB (reuse your working saving code here)
                $transaction = new Transactions();
                $transaction->transaction_id      = $response->id ?? null;
                $transaction->invoice_id          = $response->invoice->invoice_id ?? null;
                $transaction->state               = $response->invoice->state ?? null;
                $transaction->provider            = $response->invoice->provider ?? null;
                $transaction->charges             = $response->invoice->charges ?? null;
                $transaction->net_amount          = $response->invoice->net_amount ?? null;
                $transaction->currency            = $response->invoice->currency ?? null;
                $transaction->value               = $response->invoice->value ?? null;
                $transaction->account             = $response->invoice->account ?? null;
                $transaction->api_ref             = $response->invoice->api_ref ?? null;
                $transaction->mpesa_reference     = $response->invoice->mpesa_reference ?? null;
                $transaction->host                = $response->invoice->host ?? null;
                $transaction->bin_country         = $response->invoice->card_info->bin_country ?? null;
                $transaction->card_type           = $response->invoice->card_info->card_type ?? null;
                $transaction->retry_count         = $response->invoice->retry_count ?? null;
                $transaction->failed_reason       = $response->invoice->failed_reason ?? null;
                $transaction->failed_code         = $response->invoice->failed_code ?? null;
                $transaction->failed_code_link    = $response->invoice->failed_code_link ?? null;
                $transaction->response_created_at = isset($response->created_at) ? date('Y-m-d H:i:s', strtotime($response->created_at)) : null;
                $transaction->response_updated_at = isset($response->updated_at) ? date('Y-m-d H:i:s', strtotime($response->updated_at)) : null;
                $transaction->customer_id         = $response->customer->customer_id ?? null;
                $transaction->phone_number        = $response->customer->phone_number ?? $model->phone_number;
                $transaction->email               = $response->customer->email ?? null;
                $transaction->first_name          = $response->customer->first_name ?? null;
                $transaction->last_name           = $response->customer->last_name ?? null;
                $transaction->country             = $response->customer->country ?? null;
                $transaction->zipcode             = $response->customer->zipcode ?? null;
                $transaction->payment_link        = $response->payment_link ?? null;
                $transaction->customer_comment    = $response->customer_comment ?? null;
                $transaction->refundable = isset($response->refundable)
                    ? (is_bool($response->refundable) ? ($response->refundable ? 'true' : 'false') : (string) $response->refundable)
                    : null;

                if ($transaction->save()) {
                    Yii::$app->session->setFlash('success', 'STK push sent! Complete the payment on your phone.');
                } else {
                    Yii::error($transaction->errors, 'payment');
                    Yii::$app->session->setFlash('error', 'STK push sent but failed to save transaction.');
                }
            } catch (\Exception $e) {
                Yii::error($e->getMessage(), 'payment');
                Yii::$app->session->setFlash('error', 'Transaction failed: ' . $e->getMessage());
            }

            return $this->redirect(['donate']);
        }

        Yii::$app->session->setFlash('error', 'Invalid donation form data.');
        return $this->redirect(['donate']);
    }


    public function actionSaveTransaction()
    {
        $rawData = file_get_contents('php://input');
        file_put_contents('transaction_log.txt', $rawData . "\n", FILE_APPEND); // Log the raw JSON

        $response = json_decode($rawData, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            file_put_contents('transaction_error.txt', 'JSON decode error: ' . json_last_error_msg() . "\n", FILE_APPEND);
            return json_encode(['status' => 'error', 'message' => 'Invalid JSON']);
        }

        $transactions = [];

        // Handle both single transaction and array of transactions
        if (isset($response['results']) && is_array($response['results'])) {
            $transactions = $response['results'];
        } elseif (isset($response['id']) || isset($response['transaction_id'])) {
            $transactions[] = $response;
        } else {
            return json_encode(['status' => 'error', 'message' => 'No valid transaction data']);
        }

        $successCount = 0;

        foreach ($transactions as $transaction) {
            $transactionId = $transaction['transaction_id'] ?? $transaction['id'] ?? null;

            if (!$transactionId) {
                file_put_contents('transaction_error.txt', 'Missing transaction ID: ' . json_encode($transaction) . "\n", FILE_APPEND);
                continue;
            }

            if (\app\models\Transactions::find()->where(['transaction_id' => $transactionId])->exists()) {
                continue; // Skip duplicates
            }

            $invoice = $transaction['invoice'] ?? [];

            $model = new \app\models\Transactions();
            $model->transaction_id   = $transactionId;
            $model->invoice_id       = $invoice['invoice_id'] ?? null;
            $model->state            = $invoice['state'] ?? null;
            $model->provider         = $invoice['provider'] ?? null;
            $model->charges          = $invoice['charges'] ?? null;
            $model->net_amount       = $invoice['net_amount'] ?? null;
            $model->currency         = $invoice['currency'] ?? $transaction['currency'] ?? null;
            $model->value            = $invoice['value'] ?? $transaction['value'] ?? null;
            $model->account          = $invoice['account'] ?? null;
            $model->api_ref          = $invoice['api_ref'] ?? null;
            $model->mpesa_reference  = $invoice['mpesa_reference'] ?? null;
            $model->narrative        = $invoice['narrative'] ?? $transaction['narrative'] ?? null;
            $model->trans_type       = $invoice['trans_type'] ?? $transaction['trans_type'] ?? null;
            $model->status           = $invoice['state'] ?? $transaction['status'] ?? 'PENDING';
            $model->created_at       = $transaction['created_at'] ?? null;
            $model->updated_at       = $transaction['updated_at'] ?? null;

            if ($model->save()) {
                $successCount++;
            } else {
                file_put_contents('transaction_error.txt', json_encode($model->errors) . "\n", FILE_APPEND);
            }
        }

        return json_encode([
            'status' => 'success',
            'message' => "$successCount transactions saved"
        ]);
    }




    public function actionCallback()
    {
        $data = json_decode(file_get_contents('php://input'), true);
        $transaction = (object) $data;

        // Find transaction in database
        $model = Transactions::findOne($transaction->id);
        if ($model) {
            $model->state = $transaction->invoice->state;
            $model->mpesa_reference = $transaction->invoice->mpesa_reference;
            $model->updated_at = $transaction->updated_at;
            $model->status = $transaction->invoice->state;

            if ($model->save()) {
                return json_encode(['status' => 'success', 'message' => 'Callback processed']);
            } else {
                return json_encode(['status' => 'error', 'message' => $model->errors]);
            }
        }
        return json_encode(['status' => 'error', 'message' => 'Transaction not found']);
    }
}
