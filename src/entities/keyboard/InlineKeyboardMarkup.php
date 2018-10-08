<?php
/**
 * Created date 4/26/2018 12:29 AM
 * @author Tsvetkov Alexander <ac@goldcarrot.ru>
 */

namespace tsvetkov\telegram_bot\entities\keyboard;

use tsvetkov\telegram_bot\entities\BaseModel;
use yii\helpers\ArrayHelper;

class InlineKeyboardMarkup extends BaseModel
{
    /**
     * Array of button rows, each represented by an Array of InlineKeyboardButton objects
     * @var array
     */
    public $inline_keyboard;

    public function rules()
    {
        return ArrayHelper::merge(parent::rules(), [
            [['inline_keyboard'], 'safe'],
        ]);
    }
}