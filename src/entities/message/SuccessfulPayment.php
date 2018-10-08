<?php
/**
 * Created date 4/25/2018 11:18 PM
 * @author Tsvetkov Alexander <ac@goldcarrot.ru>
 */

namespace tsvetkov\telegram_bot\entities\message;

use tsvetkov\telegram_bot\entities\BaseModel;
use yii\helpers\ArrayHelper;

class SuccessfulPayment extends BaseModel
{
    public $objectsArray = [
        'order_info' => OrderInfo::class,
    ];

    /** @var string $currency */
    public $currency;

    /** @var integer $total_amount */
    public $total_amount;

    /** @var string $invoice_payload */
    public $invoice_payload;

    /** @var string $shipping_option_id */
    public $shipping_option_id;

    /** @var OrderInfo $order_info */
    public $order_info;

    /** @var string $telegram_payment_charge_id */
    public $telegram_payment_charge_id;

    /** @var string $provider_payment_charge_id */
    public $provider_payment_charge_id;

    /**
     * @return array
     */
    public function rules()
    {
        return ArrayHelper::merge(parent::rules(), [
            [['currency', 'invoice_payload', 'shipping_option_id', 'telegram_payment_charge_id', 'provider_payment_charge_id'], 'string'],
            [['total_amount'], 'integer'],
        ]);
    }
}