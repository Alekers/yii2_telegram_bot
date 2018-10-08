<?php
/**
 * Created date 4/25/2018 9:34 PM
 * @author Tsvetkov Alexander <ac@goldcarrot.ru>
 */

namespace tsvetkov\telegram_bot\entities\message;

use tsvetkov\telegram_bot\entities\BaseModel;
use yii\helpers\ArrayHelper;

class Audio extends BaseModel
{
    /** @var string $file_id */
    public $file_id;

    /** @var integer $duration */
    public $duration;

    /** @var string $performer */
    public $performer;

    /** @var string $title */
    public $title;

    /** @var string $mime_type */
    public $mime_type;

    /** @var integer $file_size */
    public $file_size;

    /**
     * @return array
     */
    public function rules()
    {
        return ArrayHelper::merge(parent::rules(), [
            [['file_id', 'performer', 'title', 'mime_type'], 'string'],
            [['file_size', 'duration'], 'integer'],
        ]);
    }
}