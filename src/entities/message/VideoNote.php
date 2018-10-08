<?php
/**
 * Created date 4/25/2018 10:47 PM
 * @author Tsvetkov Alexander <ac@goldcarrot.ru>
 */

namespace tsvetkov\telegram_bot\entities\message;

use tsvetkov\telegram_bot\entities\BaseModel;
use yii\helpers\ArrayHelper;

class VideoNote extends BaseModel
{
    public $objectsArray = [
        'thumb' => PhotoSize::class,
    ];

    /** @var string $file_id */
    public $file_id;

    /** @var integer $length */
    public $length;

    /** @var integer $duration */
    public $duration;

    /** @var PhotoSize $thumb */
    public $thumb;

    /** @var integer $file_size */
    public $file_size;

    /**
     * @return array
     */
    public function rules()
    {
        return ArrayHelper::merge(parent::rules(), [
            [['file_id'], 'string'],
            [['length', 'duration', 'file_size'], 'integer'],
        ]);
    }
}