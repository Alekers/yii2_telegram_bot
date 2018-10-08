<?php
/**
 * Created date 4/26/2018 12:44 AM
 * @author Tsvetkov Alexander <ac@goldcarrot.ru>
 */

namespace tsvetkov\telegram_bot\entities\message;

use tsvetkov\telegram_bot\entities\BaseModel;
use tsvetkov\telegram_bot\entities\user\User;
use yii\helpers\ArrayHelper;

class CallbackQuery extends BaseModel
{
    public $objectsArray = [
        'from' => User::class,
        'message' => Message::class,
    ];

    /** @var string $id */
    public $id;

    /** @var \tsvetkov\telegram_bot\entities\user\User $from */
    public $from;

    /** @var Message $message */
    public $message;

    /** @var string $inline_message_id */
    public $inline_message_id;

    /** @var string $chat_instance */
    public $chat_instance;

    /** @var string $data */
    public $data;

    /** @var string $game_short_name */
    public $game_short_name;

    /**
     * @return array
     */
    public function rules()
    {
        return ArrayHelper::merge(parent::rules(), [
            [['id', 'inline_message_id', 'chat_instance', 'data', 'game_short_name'], 'string'],
        ]);
    }
}