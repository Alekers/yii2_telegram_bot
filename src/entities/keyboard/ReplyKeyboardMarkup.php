<?php
/**
 * Created date 4/26/2018 12:16 AM
 * @author Tsvetkov Alexander <ac@goldcarrot.ru>
 */

namespace tsvetkov\telegram_bot\entities\keyboard;

use tsvetkov\telegram_bot\entities\BaseModel;
use yii\helpers\ArrayHelper;

class ReplyKeyboardMarkup extends BaseModel
{
    /**
     * Array of button rows, each represented by an Array of KeyboardButton objects
     * @var array
     */
    public $keyboard;

    /** @var boolean $resize_keyboard */
    public $resize_keyboard = true;

    /** @var boolean $one_time_keyboard */
    public $one_time_keyboard = false;

    /** @var boolean $selective */
    public $selective = false;

    /**
     * @return array
     */
    public function rules()
    {
        return ArrayHelper::merge(parent::rules(), [
            [['resize_keyboard', 'one_time_keyboard', 'selective'], 'boolean'],
            [['keyboard'], 'safe'],
        ]);
    }
}