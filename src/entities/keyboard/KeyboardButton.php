<?php
/**
 * Created date 4/26/2018 12:17 AM
 * @author Tsvetkov Alexander <ac@goldcarrot.ru>
 */

namespace tsvetkov\telegram_bot\entities\keyboard;

use tsvetkov\telegram_bot\entities\BaseModel;
use yii\helpers\ArrayHelper;

class KeyboardButton extends BaseModel
{
    /** @var string $text */
    public $text;

    /** @var boolean $request_contact */
    public $request_contact;

    /** @var boolean $request_location */
    public $request_location;

    /**
     * @return array
     */
    public function rules()
    {
        return ArrayHelper::merge(parent::rules(), [
            [['request_location', 'request_contact'], 'boolean'],
            [['text'], 'string'],
        ]);
    }
}