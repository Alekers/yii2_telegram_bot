<?php
/**
 * Created date 4/26/2018 12:32 AM
 * @author Tsvetkov Alexander <ac@goldcarrot.ru>
 */

namespace tsvetkov\telegram_bot\entities\keyboard;

use tsvetkov\telegram_bot\entities\BaseModel;
use yii\helpers\ArrayHelper;

class InlineKeyboardButton extends BaseModel
{
    /** @var string $text */
    public $text;

    /** @var string $url */
    public $url;

    /** @var string $callback_data */
    public $callback_data;

    /** @var string $switch_inline_data */
    public $switch_inline_data;

    /** @var string $switch_inline_query_current_chat */
    public $switch_inline_query_current_chat;

    /** @var boolean $pay */
    public $pay;

    /**
     * @return array
     */
    public function rules()
    {
        return ArrayHelper::merge(parent::rules(),[
            [['text', 'url', 'callback_data', 'switch_inline_data', 'switch_inline_query_current_chat'], 'string'],
            [['pay'], 'boolean'],
        ]);
    }
}