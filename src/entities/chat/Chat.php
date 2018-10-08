<?php
/**
 * Created date 4/25/2018 5:23 PM
 * @author Tsvetkov Alexander <ac@goldcarrot.ru>
 */

namespace tsvetkov\telegram_bot\entities\chat;

use tsvetkov\telegram_bot\entities\BaseModel;
use tsvetkov\telegram_bot\entities\message\Message;
use yii\helpers\ArrayHelper;

class Chat extends BaseModel
{
    const TYPE_PRIVATE = 'private';
    const TYPE_GROUP = 'group';
    const TYPE_SUPERGROUP = 'supergroup';
    const TYPE_CHANNEL = 'channel';

    public $objectsArray = [
        'pinned_message' => Message::class,
        'photo' => ChatPhoto::class,
    ];

    /** @var integer $id */
    public $id;

    /** @var string $type */
    public $type;

    /** @var string $title */
    public $title;

    /** @var string $username */
    public $username;

    /** @var string $first_name */
    public $first_name;

    /** @var string $last_name */
    public $last_name;

    /** @var bool $all_members_are_administrators */
    public $all_members_are_administrators;

    /** @var ChatPhoto $photo */
    public $photo;

    /** @var string $description */
    public $description;

    /** @var string $invite_link */
    public $invite_link;

    /** @var Message */
    public $pinned_message;

    /** @var string $sticker_set_name */
    public $sticker_set_name;

    /** @var boolean $can_set_sticker_set */
    public $can_set_sticker_set;

    /**
     * @return array
     */
    public function rules()
    {
        return ArrayHelper::merge(parent::rules(), [
            [['id'], 'integer'],
            [['type', 'title', 'username', 'first_name', 'last_name', 'description', 'invite_link', 'sticker_set_name'], 'string'],
            [['all_members_are_administrators', 'can_set_sticker_set'], 'boolean'],
        ]);
    }
}