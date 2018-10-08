<?php
/**
 * Created date 4/26/2018 12:51 AM
 * @author Tsvetkov Alexander <ac@goldcarrot.ru>
 */

namespace tsvetkov\telegram_bot\entities\message;

use tsvetkov\telegram_bot\entities\BaseModel;
use yii\helpers\ArrayHelper;

class ForceReply extends BaseModel
{
    /** @var boolean $force_reply */
    public $force_reply;

    /** @var boolean $selective */
    public $selective;

    /**
     * @return array
     */
    public function rules()
    {
        return ArrayHelper::merge(parent::rules(), [
            [['selective', 'force_reply'], 'boolean'],
        ]);
    }
}