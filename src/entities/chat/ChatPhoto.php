<?php
/**
 * Created date 4/25/2018 8:15 PM
 * @author Tsvetkov Alexander <ac@goldcarrot.ru>
 */

namespace tsvetkov\telegram_bot\entities\chat;

use tsvetkov\telegram_bot\entities\BaseModel;
use yii\helpers\ArrayHelper;

class ChatPhoto extends BaseModel
{
    /** @var string $small_file_id */
    public $small_file_id;

    /** @var string $big_file_id */
    public $big_file_id;

    /**
     * @return array
     */
    public function rules()
    {
        return ArrayHelper::merge(parent::rules(), [
            [['small_file_id', 'big_file_id'], 'string'],
        ]);
    }
}