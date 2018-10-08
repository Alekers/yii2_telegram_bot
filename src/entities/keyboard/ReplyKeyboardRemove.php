<?php
/**
 * Created date 4/26/2018 12:27 AM
 * @author Tsvetkov Alexander <ac@goldcarrot.ru>
 */

namespace tsvetkov\telegram_bot\entities\keyboard;

use tsvetkov\telegram_bot\entities\BaseModel;
use yii\helpers\ArrayHelper;

class ReplyKeyboardRemove extends BaseModel
{
    /** @var boolean $remove_keyboard */
    public $remove_keyboard;

    /** @var boolean $selective */
    public $selective;

    /**
     * @return array
     */
    public function rules()
    {
        return ArrayHelper::merge(parent::rules(), [
            [['remove_keyboard', 'selective'], 'boolean'],
        ]);
    }
}