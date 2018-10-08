<?php
/**
 * Created date 4/25/2018 11:19 PM
 * @author Tsvetkov Alexander <ac@goldcarrot.ru>
 */

namespace tsvetkov\telegram_bot\entities\message;

use tsvetkov\telegram_bot\entities\BaseModel;
use yii\helpers\ArrayHelper;

class OrderInfo extends BaseModel
{
    public $objectsArray = [
        'shipping_address' => ShippingAddress::class,
    ];

    /** @var string $name */
    public $name;

    /** @var string $phone_number */
    public $phone_number;

    /** @var string $email */
    public $email;

    /** @var ShippingAddress $shipping_address */
    public $shipping_address;

    /**
     * @return array
     */
    public function rules()
    {
        return ArrayHelper::merge(parent::rules(), [
            [['name', 'phone_number', 'email'], 'string'],
        ]);
    }
}